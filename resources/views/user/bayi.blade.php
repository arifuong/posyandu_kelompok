<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- Select2 Bootstrap 5 Theme CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .select2-container--bootstrap4 .select2-selection--single {
            border: 1px solid black; /* Ganti warna dan ketebalan sesuai kebutuhan */
            border-radius: 10px;
            height: 50px;
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <a href="{{ route('cek/ibu') }}" class="btn btn-dark">Cek data Ibu</a>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="nik">Pilih NIK BAYI</label>
                    <select name="nik" id="nik" class="form-select" style="border-bottom: 1px solid black">
                        <option value="">Default</option>
                        @foreach ($data as $item)
                            <option value="{{ $item->nik }}">{{ $item->nik }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="row mt-3" id="dataibu">
            <!-- Data akan ditampilkan di sini -->
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<script>
    $(document).ready(function() {
        $('#nik').select2({
            theme: 'bootstrap4', // Menggunakan tema Bootstrap 4 karena tidak ada tema resmi untuk Bootstrap 5
            placeholder: "Pilih NIK BAYI"
        });

        $('#nik').on('change', function() {
            var nik = $(this).val();
            console.log('NIK selected:', nik); // Debug: Cek NIK yang dipilih
            if (nik) {
                $.ajax({
                    url: '/api/data-bayi/' + nik,
                    method: 'GET',
                    success: function(data) {
                        console.log('Data received:', data); // Debug: Cek data yang diterima
                        if(data) {
                            // Menampilkan data pada div kosong
                            $('#dataibu').html(`
                                <div class="col">
                                    <h5>Data bayi</h5>
                                    <p>NIK: ${data.NIK}</p>
                                    <p>Umur: ${data.umur}</p>
                                    <p>Jenis kelamin: ${data.jeniskelamin}</p>
                                    <p>Nama orangtua: ${data.nama_orangtua}</p>
                                    <p>Berat badan: ${data.Berat_badan}</p>
                                    <p>Tinggi badan: ${data.tinggi_badan}</p>
                                    <p>Tinggi badan: ${data.tinggi_badan}</p>
                                    <p>Jenis imunisasi: ${data.jenis_imunisasi}</p>
                                    <p>Lingkar kepala: ${data.lingkar_kepala}</p>
                                    <p>Riwayat penyakit: ${data.riwayat_penyakit}</p>
                                    <p>Status penyakit: ${data.status_penyakit}</p>
                                    <p>Jenis ASI: ${data.jenis_asi}</p>
                                    <p>Lama menyusui: ${data.lama_menyusui}</p>
                                    <p>Perkembangan: ${data.perkembangan}</p>
                                    <p>waktu: ${data.created_at}</p>
                                    <!-- Tambahkan data lainnya sesuai kebutuhan -->
                                </div>
                            `);
                        } else {
                            $('#dataibu').html('<p>Data tidak ditemukan.</p>');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Failed to fetch data:', error);
                        $('#dataibu').html('<p>Gagal mengambil data. Silakan coba lagi.</p>');
                    }
                });
            } else {
                $('#dataibu').html(''); // Kosongkan div jika tidak ada NIK yang dipilih
            }
        });
    });
</script>
</body>
</html>
