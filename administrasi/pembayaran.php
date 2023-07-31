<?php
require "../functions.php";
if (!$_SESSION["login"]) {
  header("location:../form/signIn.php");
}
$id = $_SESSION["id"];
$queri = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE id_peserta = '$id'");
$queri1 = mysqli_query($conn, "SELECT * FROM peserta WHERE id = '$id'");
$datas = mysqli_fetch_assoc($queri1);
// if (!isset($_SESSION["login"])) {
//   header("Location: ../login/login.html");
// }
?>

<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Pembayaran</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <link href="../assets/img/logo/logo.png" rel="icon">
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <script src="./assets/js/init-alpine.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script src="./assets/js/charts-lines.js" defer></script>
    <script src="./assets/js/charts-pie.js" defer></script>
</head>

<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        <!-- Desktop sidebar -->
        <aside class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="../index.php">
                    PRJ X HT XI
                </a>
                <ul>
                    <li class="relative px-6 py-3 mt-6">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="../index.php">
                            <svg class=" w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Home</span>
                        </a>
                    </li>

                    <li class="relative px-6 py-3 mt-6">

                        <span class="absolute inset-y-0 left-0 w-1 bg-yellow-300 rounded-tr-lg rounded-br-lg"
                            aria-hidden="true" style="color: #01C38D !important;"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 text-gray-800"
                            href="#">
                            <svg class=" w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Pembayaran</span>
                        </a>
                    </li>

                    </li>

                    
                </ul>
            </div>
        </aside>
        <!-- Mobile sidebar -->
        <!-- Backdrop -->
        <div x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"></div>
        <aside class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
            x-show="isSideMenuOpen" x-transition:enter="transition ease-in-out duration-150"
            x-transition:enter-start="opacity-0 transform -translate-x-20" x-transition:enter-end="opacity-100"
            x-transition:leave="transition ease-in-out duration-150" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0 transform -translate-x-20" @click.away="closeSideMenu"
            @keydown.escape="closeSideMenu">
            <div class="py-4 text-gray-500 dark:text-gray-400">
                <a class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200" href="#">
                    Pembayaran
                </a>
                <ul class="mt-6">
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="../index.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                </path>
                            </svg>
                            <span class="ml-4">Beranda</span>
                        </a>
                    </li>
                </ul>
                <!-- <ul>
                    <li class="relative px-6 py-3">
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                            href="lomba.php">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Lomba</span>
                        </a>
                    </li>
                </ul> -->
                <ul>
                    <li class="relative px-6 py-3">
                        <span class="absolute inset-y-0 left-0 w-1 bg-yellow-600 rounded-tr-lg rounded-br-lg"
                            aria-hidden="true"></span>
                        <a class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100 text-gray-800"
                            href="#">
                            <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                            <span class="ml-4">Pembayaran</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <div class="flex flex-col flex-1 w-full">
            <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
                <div
                    class="container flex items-center justify-between h-full px-6 mx-auto text-yellow-600 dark:text-yellow-300">
                    <!-- Mobile hamburger -->
                    <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-yellow"
                        @click="toggleSideMenu" aria-label="Menu">
                        <svg class="w-6 h-6" aria-hidden="true" fill="#f3bd00" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>

                    <!-- Theme toggler -->
                    <li class="flex">
                        <button class="rounded-md focus:outline-none focus:shadow-outline-yellow" @click="toggleTheme"
                            aria-label="Toggle color mode">
                            <template x-if="!dark">
                                <svg class="w-5 h-5" aria-hidden="true" fill="#f3bd00" viewBox="0 0 20 20">
                                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                                </svg>
                            </template>
                            <template x-if="dark">
                                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </template>
                        </button>
                    </li>
                    <!-- Profile menu -->
                    <li class="relative" style="list-style: none;">
                        <p class="align-middle rounded-full focus:shadow-outline-yellow focus:outline-none"
                            @click="toggleProfileMenu" @keydown.escape="closeProfileMenu" aria-label="Account"
                            aria-haspopup="true">
                        <h1 style="color: #01C38D !important;">
                            <?= $datas["nama"] ?>
                        </h1>
                        </p>
                    </li>
                    </ul>
                </div>
            </header>
            <main class="h-full pb-16 overflow-y-auto">
                <div class="container px-6 mx-auto grid">
                    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                        Pembayaran
                    </h2>

                    <div class="w-full overflow-hidden rounded-lg shadow-xs">
                        <div class="w-full overflow-x-auto">
                            <table class="w-full whitespace-no-wrap">
                                <thead>
                                    <tr
                                        class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                        <th class="px-4 py-3">Lomba</th>
                                        <th class="px-4 py-3">Tanggal Pendaftaran</th>
                                        <th class="px-4 py-3">Jumlah Biaya Pendaftaran</th>
                                        <th class="px-4 py-3">Status Administratif</th>
                                        <th class="px-4 py-3">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                                    <?php
                  while ($data = mysqli_fetch_assoc($queri)) {
                    ?>
                                    <tr class="text-gray-700 dark:text-gray-400">
                                        <td class="px-4 py-3">
                                            <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div>
                                                    <p class="font-semibold">
                                                        <?= $data["divisi"] ?>
                                                    </p>
                                                    <p class="text-xs text-gray-600 dark:text-gray-400">
                                                        <?= $data["nama_tim"] ?>
                                                    </p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <?= $data["date"] ?>
                                        </td>
                                        <td class="px-4 py-3 text-sm">
                                            <?php
                        if ($data["divisi"] == "Photography") { // Lomba Photography
                            if($data['date'] >= "2023-08-01" && $data['date'] <= "2023-08-31"){
                                echo "Rp 20.000";
                            }
                            else {
                                echo "Rp 25.000";
                            }
                        } 
                        
                        elseif ($data["divisi"] == "Futsal") { // Lomba Futsal
                            $harga_default = "Rp 370.000";
                            $harga_spesial = "Rp 400.000";

                            $counter = 0;
                            $harga_spesial_ids = array();
                            $result = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE divisi='Futsal' ORDER BY id");

                            while ($d = $result->fetch_assoc()) {
                                $counter++;
                                if ($counter <= 7) {
                                    $harga_spesial_ids[] = $d["id"]; // Menambahkan ID pendaftaran peserta ke dalam array
                                }
                            }

                            if (in_array($data['id'], $harga_spesial_ids)) { // Melakukan pengecekan pada ID yang diberikan harga spesial
                                echo "$harga_spesial";
                            } else {
                                echo "$harga_default";
                            }
                        } 
                        
                        elseif ($data["divisi"] == "CPC") { // Lomba CPC
                            if($data['date'] >= "2023-08-01" && $data['date'] <= "2023-08-31"){
                                echo "Rp 53.000";
                            }
                            else {
                                echo "Rp 60.000";
                            }
                        } 
                        
                        elseif ($data["divisi"] == "LCT") { // Lomba LCT
                            echo "Rp 150.000";
                        } 
                        
                        elseif ($data["divisi"] == "ML") { // Lomba ML
                            if($data['date'] >= "2023-08-18" && $data['date'] <= "2023-09-16"){
                                echo "Rp 25.000";
                            }
                            else {
                                echo "Rp 30.000";
                            }
                        } 
                        
                        elseif ($data["divisi"] == "Badminton Ganda") { // Lomba Badminton Ganda
                            if($data['date'] >= "2023-08-01" && $data['date'] <= "2023-08-31"){
                                $harga_default = "Rp 135.000";
                                $harga_spesial = "Rp 120.000";

                                $counter = 0;
                                $harga_spesial_ids = array();
                                $result = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE divisi='Badminton Ganda' ORDER BY id");

                                while ($d = $result->fetch_assoc()) {
                                    $counter++;
                                    if ($counter <= 7) {
                                        $harga_spesial_ids[] = $d["id"]; // Menambahkan ID pendaftaran peserta ke dalam array
                                    }
                                }

                                if (in_array($data['id'], $harga_spesial_ids)) { // Melakukan pengecekan pada ID yang diberikan harga spesial
                                    echo "$harga_spesial";
                                } else {
                                    echo "$harga_default";
                                }
                            }
                            else {
                                echo "Rp 145.000";
                            }
                        } 
                        
                        elseif ($data["divisi"] == "Badminton Tunggal") { // Lomba Badminton Tunggal
                            if($data['date'] >= "2023-08-01" && $data['date'] <= "2023-08-31"){
                                $harga_default = "Rp 75.000";
                                $harga_spesial = "Rp 85.000";

                                $counter = 0;
                                $harga_spesial_ids = array();
                                $result = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE divisi='Badminton Tunggal' ORDER BY id");

                                while ($d = $result->fetch_assoc()) {
                                    $counter++;
                                    if ($counter <= 7) {
                                        $harga_spesial_ids[] = $d["id"]; // Menambahkan ID pendaftaran peserta ke dalam array
                                    }
                                }

                                if (in_array($data['id'], $harga_spesial_ids)) { // Melakukan pengecekan pada ID yang diberikan harga spesial
                                    echo "$harga_spesial";
                                } else {
                                    echo "$harga_default";
                                }
                            }
                            else {
                                echo "Rp 95.000";
                            }
                        } 
                        
                        elseif ($data["divisi"] == "Essay Nasional") { // Lomba Essay Nasional
                            if($data['date'] >= "2023-07-26" && $data['date'] <= "2023-08-31"){
                                $harga_default = "Rp 50.000";
                                $harga_spesial = "Rp 35.000";

                                $counter = 0;
                                $harga_spesial_ids = array();
                                $result = mysqli_query($conn, "SELECT * FROM pendaftaran WHERE divisi='Essay Nasional' ORDER BY id");

                                while ($d = $result->fetch_assoc()) {
                                    $counter++;
                                    if ($counter <= 10) {
                                        $harga_spesial_ids[] = $d["id"]; // Menambahkan ID pendaftaran peserta ke dalam array
                                    }
                                }

                                if (in_array($data['id'], $harga_spesial_ids)) { // Melakukan pengecekan pada ID yang diberikan harga spesial
                                    echo "$harga_spesial";
                                } else {
                                    echo "$harga_default";
                                }
                            }
                            else {
                                echo "Rp 55.000";
                            }
                        } 
                        
                        elseif ($data["divisi"] == "PES") { // Lomba PES
                            echo "Rp 35.000";
                        } 
                        
                        elseif ($data["divisi"] == "Poster") { // Lomba Poster
                            echo "Gratis";
                        }
                        ?>
                                        </td>
                                        <td class="px-4 py-3 text-xs">
                                            <?php
                        if ($data["statusPembayaran"] == null || $data["statusPembayaran"] == 1) {
                          ?>
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600">
                                                Pending
                                            </span>
                                            <?php
                        } else {
                          ?>
                                            <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">
                                                Approved
                                            </span>
                                            <?php
                        }
                        ?>
                                        </td>

                                        <td>
                                            <?php
                        if ($data["divisi"] == "Photography") {
                          $link = "form/formPG";
                        }
                        else if ($data['divisi'] == "Poster"){
                            $link = "form/formPoster";
                        }
                        else if ($data['divisi'] == "Essay Nasional"){
                            $link = "form/formEssay";
                        }
                        else {
                          $link = "form/form";
                        }
                        ?>
                                            <div class="container row">
                                                <div class="col">
                                                    <form action=<?= $link ?> method="post">
                                                        <input type="hidden" name="id" value="<?= $data["id"] ?>">
                                                        <button type="submit"
                                                            class="btn-bayar text-xs px-3 py-1 font-semibold rounded-md text-white align-baseline"
                                                            style="background-color: #01C38D;">
                                                            <?php if ($data["divisi"] == "Poster" || ($data["divisi"] == "Photography" && $data["statusPembayaran"] == 2)){ ?>
                                                            Karya
                                                            <?php } else { ?>
                                                            Bayar
                                                            <?php } ?>
                                                            <i class="bi bi-chevron-right"></i></button>
                                                    </form>
                                                </div>
                                                <div class="col mt-1">
                                                    <form action="detil" method="post">
                                                        <input type="hidden" name="id" value="<?= $data["id"] ?>">
                                                        <button type="submit"
                                                            class="btn-bayar text-xs px-3 py-1 font-semibold rounded-md text-white align-baseline"
                                                            style="background-color: #01C38D;">Detail
                                                            <i class="bi bi-chevron-right"></i></button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                  }
                  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </main>
        </div>
    </div>
</body>

</html>