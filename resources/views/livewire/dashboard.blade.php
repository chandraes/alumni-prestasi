<x-slot name="header_content">
    <h1>Dashboard</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
    </div>
</x-slot>
<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 mt-2">
    <div class="px-2 mb-2">
        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
            <div class="flex flex-wrap border-b border-gray-200 undefined">
                <div class="bg-gradient-to-tr from-pink-500 to-pink-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-pink">
                    <span class="fa fa-graduation-cap text-4xl"></span>
                </div>
                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                    <h3 class="text-gray-500 font-light tracking-wide text-base mb-1">Total Data Alumni</h3>
                    <span class="text-3xl text-gray-900">
                        {{$alumnis}}
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="px-2 mb-2">
        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
            <div class="flex flex-wrap border-b border-gray-200 undefined">
                <div
                    class="bg-gradient-to-tr from-blue-500 to-blue-700 -mt-10 mb-4 rounded-xl text-white grid items-center w-24 h-24 py-4 px-4 justify-center shadow-lg-blue">
                    <span class="fa fa-star text-4xl"></span>
                </div>
                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                    <h5 class="text-gray-500 font-light tracking-wide text-base mb-1">Total Data Mahasiswa Prestasi</h5><span
                        class="text-3xl text-gray-900">{{$prestasi}}</span>
                </div>
            </div>
           
        </div>
    </div>
</div>
<hr class="my-2">
<div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 mt-3">
    <div class="px-2 mb-5">
        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
            <div class="flex flex-wrap border-b border-gray-200 undefined">
                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                    <h1 class="text-2xl mb-3 text-center">Kurva Alumni Per Angkatan</h1>
                    <hr class="mb-4 text-md">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="px-2 mb-10">
        <div class="w-full bg-white rounded-xl overflow-hdden shadow-md p-4 undefined">
            <div class="flex flex-wrap border-b border-gray-200 undefined">
                <div class="w-full pl-4 max-w-full flex-grow flex-1 mb-2 text-right undefined">
                    <h1 class="text-2xl mb-3 text-center">Kurva Alumni Per Jurusan</h1>
                    <hr class="mb-4 text-md">
                    <canvas id="chartJurusan"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="pt-1">
    <div class="mx-auto">
        <div class="mt-16 border-t-2 border-gray-300 flex flex-col items-center">
            <div class="sm:w-2/3 text-center py-6">
                <p class="text-sm text-blue-700 font-bold mb-2">
                    ©2021 Fakultas Teknik Universitas Sriwijaya
                </p>
            </div>
        </div>
    </div>
</footer>
<script>
    document.addEventListener('livewire:load', function() {

        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        var Color = "rgba(" + r + "," + g + "," + b + ",1" + ")";
        var labels = <?php echo $lblAngkatan; ?>;
        var data = <?php echo $jmlAngkatan; ?>;
        var data2 = <?php echo $sdhBkj; ?>;

        var labeljurusan = <?php echo $lblJurusan; ?>;
        var dataJurusan = <?php echo $jmlJurusan; ?>;
        var databekerja = <?php echo $bkj; ?>;

        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            data: {
                labels: labels,
                datasets: [{
                        type: 'bar',
                        label: 'Alumni Per Angkatan',
                        data: data,
                        backgroundColor: Color,
                        borderColor: Color,
                        borderWidth: 1,
                        order: 2
                    },
                    {
                        type: 'line',
                        label: "Sudah Bekerja",
                        data: data2,
                        backgroundColor: [
                            'rgba(0,0,0,1)',
                        ],
                        borderColor: [
                            'rgba(0,0,0,1)',
                        ],
                        order: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
</script>

<script>
    document.addEventListener('livewire:load', function() {

        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        var Color = "rgba(" + r + "," + g + "," + b + ",0.3" + ")";

        var labeljurusan = <?php echo $lblJurusan; ?>;
        var dataJurusan = <?php echo $jmlJurusan; ?>;
        var databekerja = <?php echo $bkj; ?>;

        var ctx = document.getElementById('chartJurusan').getContext('2d');
        var myChart = new Chart(ctx, {
            data: {
                labels: labeljurusan,
                datasets: [{
                        type: 'line',
                        label: "Jumlah Alumni",
                        data: dataJurusan,
                        backgroundColor: Color,
                        fill: true,
                        borderColor: Color,
                        borderWidth: 1,
                        order: 2
                    },
                    {
                        type: 'line',
                        label: "Sudah Bekerja",
                        data: databekerja,
                        backgroundColor: [
                            'rgba(0,0,0,1)',
                        ],
                        borderColor: [
                            'rgba(0,0,0,1)',
                        ],
                        order: 1
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    })
</script>
