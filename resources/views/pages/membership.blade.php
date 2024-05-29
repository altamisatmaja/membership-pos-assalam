@extends('includes.app')

@section('title', 'Assalam | Membership')

@section('content')
    <div class="flex items-center justify-center p-12">

        <div class="mx-auto w-full">
            <div class="flex flex-wrap justify-center mb-8">
                <img src="{{ asset('images/logoassalam.png') }}" alt="Logo" class="h-28">
                <img src="{{ asset('images/teksassalam.png') }}" alt="Logo" class="h-28">
            </div>
            <div class="flex flex-col justify-center">
                <h1 class="text-2xl font-semibold text-center text-gray-800 mt-8">Pendaftaran Kartu
                    <h1 class="text-2xl font-semibold text-center text-gray-800 mt-8 mb-6">Member Assalam Hypermarket
                    </h1>
            </div>
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}

            {{-- @if (session('error'))
                <p>
                    {{ session('error') }}
                </p>
            @endif --}}
            <div class="my-10">
                <form action="{{ route('customer.member.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="nomor_pas" class="mb-3 block text-lg font-semibold text-gray-800">
                                Nomor PAS
                                <div class="">
                                    <span class="font-medium text-base text-gray-600">Silahkan diisi sesuai nomor pas anda
                                        apabila sudah terdaftar. Apabila belum
                                        memiliki nomor pas, silahkan dikosongkan</span>
                                </div>
                            </label>
                            <input type="text" name="nomor_pas" id="nomor_pas" placeholder="Nomor pas anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            @error('nomor_pas')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="nama_member" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Nama
                                </label>
                                <input type="text" name="nama_member" id="nama_member" placeholder="Nama anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('nama_member')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="kewarganegaraan" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Kewarganegaraan
                                </label>
                                <input type="text" name="kewarganegaraan" id="kewarganegaraan"
                                    placeholder="Masukkan kewarganegaraan anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('kewarganegaraan')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="tempat_lahir" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Tempat lahir
                                </label>
                                <input type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('tempat_lahir')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="tanggal_lahir" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Tanggal lahir
                                </label>
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('tanggal_lahir')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="jenis_kelamin" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Jenis kelamin
                                </label>
                                <select name="jenis_kelamin" id="jenis_kelamin"
                                    class="border py-4 px-6 text-base font-medium rounded w-full">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                                @error('jenis_kelamin')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="agama" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Agama
                                </label>
                                <select name="agama" id="agama"
                                    class="border py-4 px-6 text-base font-medium rounded w-full">
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Konghucu">Konghucu</option>
                                </select>
                                @error('agama')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="provinsi">Provinsi *</label>
                            <select name="provinsi" id="provinsi" class="provinsi border p-2  py-4 px-6 rounded w-full">
                                <option data-id="1" value="JAWA TIMUR">Pilih provinsi</option>
                            </select>
                            @error('provinsi')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="kabupaten">Kabupaten *</label>
                            <select disabled name="kabupaten" id="kabupaten"
                                class="kabupaten border py-4 px-6 p-2 rounded w-full">
                                <option data-id="1" value="KAB. NGAWI">Pilih kabupaten</option>
                            </select>
                            @error('kabupaten')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="kecamatan">Kecamatan *</label>
                            <select disabled name="kecamatan" id="kecamatan"
                                class="kecamatan border py-4 px-6 p-2 rounded w-full">
                                <option data-id="1" value="Paron">Pilih kecamatan</option>
                            </select>
                            @error('kecamatan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                        <div>
                            <label for="kelurahan">kelurahan *</label>
                            <select disabled name="kelurahan" id="kelurahan"
                                class="kelurahan border py-4 px-6 p-2 rounded w-full">
                                <option data-id="1" value="1">Pilih kelurahan</option>
                            </select>
                            @error('kelurahan')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="alamat" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Alamat
                                </label>
                                <input type="text" name="alamat" id="alamat" placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('alamat')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="rt_rw" class="mb-3 block text-lg font-semibold text-gray-800">
                                    RT/RW
                                </label>
                                <input type="text" name="rt_rw" id="rt_rw" placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('rt_rw')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="kode_zip" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Kode POS Alamat
                                </label>
                                <input type="text" name="kode_zip" id="kode_zip" placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('kode_zip')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="no_hp" class="mb-3 block text-lg font-semibold text-gray-800">
                                    No hp
                                </label>
                                <input type="text" name="no_hp" id="no_hp" placeholder="Masukkan no telp Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('no_hp')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="status_member" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Status member
                                </label>
                                <select name="status_member" id="status_member"
                                    class="border py-4 px-6 text-base font-medium rounded w-full">
                                    <option value="Single">Single</option>
                                    <option value="Kawin">Kawin</option>
                                </select>
                                @error('status_member')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="no_telp" class="mb-3 block text-lg font-semibold text-gray-800">
                                    No telp
                                </label>
                                <input type="text" name="no_telp" id="no_telp" placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('no_telp')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="jumlah_tanggungan" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Jumlah tanggungan
                                </label>
                                <input type="number" name="jumlah_tanggungan" id="jumlah_tanggungan"
                                    placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('jumlah_tanggungan')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="pendapatan_bulanan" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Pendapatan bulanan
                                </label>
                                <input type="number" name="pendapatan_bulanan" id="pendapatan_bulanan"
                                    placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('pendapatan_bulanan')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="kena_pajak" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Pengusahaa kena pajak
                                </label>
                                <select name="kena_pajak" id="kena_pajak"
                                    class="border py-4 px-6 text-base font-medium rounded w-full">
                                    <option value="1">Ya</option>
                                    <option value="0">Tidak</option>
                                </select>
                                @error('kena_pajak')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="npwp" class="mb-3 block text-lg font-semibold text-gray-800">
                                    NPWP
                                </label>
                                <input type="text" name="npwp" id="npwp" placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                                @error('npwp')
                                    <span class="text-red-500">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>


                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-gray-800">
                            Foto anda
                        </label>

                        <div class="mb-8">
                            <input type="file" name="gambar_member" id="gambar_member" class="sr-only" />
                            <label for="gambar_member"
                                class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-12 text-center">
                                <div>
                                    <span class="mb-2 block text-xl font-semibold text-gray-800">
                                        Taruh gambar disini
                                    </span>
                                    <span class="mb-2 block text-base font-medium text-[#6B7280]">
                                        atau
                                    </span>
                                    <span
                                        class="inline-flex rounded border border-[#e0e0e0] py-2 px-7 text-lg font-semibold text-gray-800">
                                        Cari
                                    </span>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="w-full mx-auto justify-center items-center">
                        <button type="submit"
                            class="w-full hover:shadow-form rounded-md bg-green-800 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(function() {
            // get provinsi
            $(document).ready(function() {
                $.ajax({
                    url: `https://ibnux.github.io/data-indonesia/provinsi.json`,
                    method: 'GET',
                    success: function(response) {
                        console.log(response);

                        let row = '';

                        const selectprovinsi = $('.provinsi');
                        selectprovinsi.empty();

                        selectprovinsi.append($('<option>', {
                            value: '',
                            'data-id': '',
                            text: 'Pilih provinsi'
                        }));

                        response.map(function(data) {
                            // console.log(data);
                            selectprovinsi.append($('<option>', {
                                'data-id': data.id,
                                value: data.nama,
                                text: data.nama,
                            }))
                        });

                        $("select.provinsi").change(function() {
                            document.getElementById("kabupaten")
                                .removeAttribute("disabled");
                            var selectprovince = $(this).children("option:selected")
                                .attr('data-id');
                            var valofselectprovince = $(this).children(
                                    "option:selected")
                                .val();

                            console.log(selectprovince);
                            console.log(valofselectprovince);

                            $.ajax({
                                url: `https://ibnux.github.io/data-indonesia/kabupaten/${selectprovince}.json`,
                                method: 'GET',
                                success: function(response) {
                                    console.log(response);

                                    let row = '';

                                    const selectkabupaten = $(
                                        '.kabupaten');
                                    selectkabupaten.empty();

                                    selectkabupaten.append($('<option>', {
                                        value: '',
                                        'data-id': '',
                                        text: 'Pilih kabupaten'
                                    }));

                                    response.map(function(data) {
                                        // console.log(data);
                                        selectkabupaten.append($(
                                            '<option>', {
                                                value: data
                                                    .nama,
                                                'data-id': data
                                                    .id,
                                                text: data
                                                    .nama,
                                            }))
                                    });

                                    $("select.kabupaten").change(
                                        function() {
                                            document.getElementById(
                                                    "kecamatan")
                                                .removeAttribute(
                                                    "disabled");
                                            var selectkabupaten = $(
                                                    this).children(
                                                    "option:selected")
                                                .attr('data-id');

                                            console.log(
                                                selectkabupaten);

                                            $.ajax({
                                                url: `https://ibnux.github.io/data-indonesia/kecamatan/${selectkabupaten}.json`,
                                                method: 'GET',
                                                success: function(
                                                    response
                                                ) {
                                                    console
                                                        .log(
                                                            response
                                                        );

                                                    let row =
                                                        '';

                                                    const
                                                        selectkecamatan =
                                                        $(
                                                            '.kecamatan'
                                                        );
                                                    selectkecamatan
                                                        .empty();

                                                    selectkecamatan
                                                        .append(
                                                            $('<option>', {
                                                                value: '',
                                                                'data-id': '',
                                                                text: 'Pilih kecamatan'
                                                            })
                                                        );

                                                    response
                                                        .map(
                                                            function(
                                                                data
                                                            ) {
                                                                // console.log(data);
                                                                selectkecamatan
                                                                    .append(
                                                                        $('<option>', {
                                                                            value: data
                                                                                .nama,
                                                                            'data-id': data
                                                                                .id,
                                                                            text: data
                                                                                .nama,
                                                                        })
                                                                    )
                                                            }
                                                        );

                                                    $("select.kecamatan")
                                                        .change(
                                                            function() {
                                                                document
                                                                    .getElementById(
                                                                        "kelurahan"
                                                                    )
                                                                    .removeAttribute(
                                                                        "disabled"
                                                                    );
                                                                var selectkec =
                                                                    $(
                                                                        this
                                                                    )
                                                                    .children(
                                                                        "option:selected"
                                                                    )
                                                                    .attr(
                                                                        'data-id'
                                                                    );
                                                                console
                                                                    .log(
                                                                        `Ini data id kecamtan: ${selectkec}`
                                                                    );

                                                                // ini yang diterusin al
                                                                $.ajax({
                                                                    url: `https://ibnux.github.io/data-indonesia/kelurahan/${selectkec}.json`,
                                                                    method: 'GET',
                                                                    success: function(
                                                                        response
                                                                    ) {
                                                                        console
                                                                            .log(
                                                                                response
                                                                            );

                                                                        let row =
                                                                            '';

                                                                        const
                                                                            selectkelurahan =
                                                                            $(
                                                                                '.kelurahan'
                                                                            );
                                                                        selectkelurahan
                                                                            .empty();

                                                                        selectkelurahan
                                                                            .append(
                                                                                $('<option>', {
                                                                                    value: '',
                                                                                    'data-id': '',
                                                                                    text: 'Pilih kelurahan',
                                                                                })
                                                                            );

                                                                        response
                                                                            .map(
                                                                                function(
                                                                                    data
                                                                                ) {
                                                                                    console
                                                                                        .log(
                                                                                            data
                                                                                        );
                                                                                    selectkelurahan
                                                                                        .append(
                                                                                            $('<option>', {
                                                                                                value: data
                                                                                                    .nama,
                                                                                                'data-id': data
                                                                                                    .id,
                                                                                                text: data
                                                                                                    .nama,
                                                                                            })
                                                                                        )
                                                                                }
                                                                            )
                                                                    }
                                                                })
                                                            }
                                                        );
                                                }
                                            })
                                        });

                                },
                                error: function(xhr, status, error) {
                                    console.error(status, error);
                                }
                            });

                        });
                    },
                    error: function(xhr, status, error) {
                        console.error(status, error);
                    }
                });
            });
        })
    </script>
@endsection
@push('js')
@endpush
