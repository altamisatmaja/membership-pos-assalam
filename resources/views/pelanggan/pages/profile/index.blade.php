@extends('pelanggan.layouts.app')

@section('title', 'Dashboard | Pelanggan')

@section('content')
    <div class="flex items-center justify-center p-5">
        <div class="mx-auto w-full">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('error'))
                <p>
                    {{ session('error') }}
                </p>
            @endif
            <div class="my-5">
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
                            <input value="{{ $member->nomor_pas }}" type="text" name="nomor_pas" id="nomor_pas"
                                placeholder="Nomor pas anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="nama_member" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Nama
                                </label>
                                <input value="{{ $member->nama_member }}" type="text" name="nama_member" id="nama_member"
                                    placeholder="Nama anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="kewarganegaraan" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Kewarganegaraan
                                </label>
                                <input value="{{ $member->kewarganegaraan }}" type="text" name="kewarganegaraan"
                                    id="kewarganegaraan" placeholder="Masukkan kewarganegaraan anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="tempat_lahir" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Tempat lahir
                                </label>
                                <input value="{{ $member->tempat_lahir }}" type="text" name="tempat_lahir"
                                    id="tempat_lahir" placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="tanggal_lahir" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Tanggal lahir
                                </label>
                                <input value="{{ $member->tanggal_lahir }}" type="date" name="tanggal_lahir"
                                    id="tanggal_lahir"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="agama" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Agama
                                </label>
                                <select name="agama" id="agama"
                                    class="border py-4 px-6 text-base font-medium rounded w-full">
                                    <option value="Islam" {{ $member->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                                    <option value="Kristen" {{ $member->agama == 'Kristen' ? 'selected' : '' }}>Kristen
                                    </option>
                                    <option value="Katolik" {{ $member->agama == 'Katolik' ? 'selected' : '' }}>Katolik
                                    </option>
                                    <option value="Hindu" {{ $member->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                                    <option value="Budha" {{ $member->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
                                    <option value="Konghucu" {{ $member->agama == 'Konghucu' ? 'selected' : '' }}>Konghucu
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="provinsi">Provinsi *</label>
                            <input value="{{ $member->provinsi }}" type="text" name="provinsi" id="provinsi"
                                placeholder="Tempat provinsi anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for="kabupaten">Kabupaten *</label>
                            <input value="{{ $member->kabupaten }}" type="text" name="kabupaten" id="kabupaten"
                                placeholder="Tempat kabupaten anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="kecamatan">Kecamatan *</label>
                            <input value="{{ $member->kecamatan }}" type="text" name="kecamatan" id="kecamatan"
                                placeholder="Tempat kecamatan anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                        <div>
                            <label for="kelurahan">kelurahan *</label>
                            <input value="{{ $member->kelurahan }}" type="text" name="kelurahan" id="kelurahan"
                                placeholder="Tempat kelurahan anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="alamat" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Alamat
                                </label>
                                <input value="{{ $member->alamat }}" type="text" name="alamat" id="alamat"
                                    placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="rt_rw" class="mb-3 block text-lg font-semibold text-gray-800">
                                    RT/RW
                                </label>
                                <input value="{{ $member->rt_rw }}" type="text" name="rt_rw" id="rt_rw"
                                    placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="kode_zip" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Post code
                                </label>
                                <input value="{{ $member->kode_zip }}" type="text" name="kode_zip" id="kode_zip"
                                    placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="no_hp" class="mb-3 block text-lg font-semibold text-gray-800">
                                    No hp
                                </label>
                                <input value="{{ $member->no_hp }}" type="text" name="no_hp" id="no_hp"
                                    placeholder="Masukkan no telp Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                                    <option value="Single" {{ $member->status_member == 'Single' ? 'selected' : '' }}>
                                        Single</option>
                                    <option value="Kawin" {{ $member->status_member == 'Kawin' ? 'selected' : '' }}>Kawin
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="no_telp" class="mb-3 block text-lg font-semibold text-gray-800">
                                    No telp
                                </label>
                                <input value="{{ $member->no_telp }}" type="text" name="no_telp" id="no_telp"
                                    placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>

                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="jumlah_tanggungan" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Jumlah tanggungan
                                </label>
                                <input value="{{ $member->jumlah_tanggungan }}" type="number" name="jumlah_tanggungan"
                                    id="jumlah_tanggungan" placeholder="Tempat lahir anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="pendapatan_bulanan" class="mb-3 block text-lg font-semibold text-gray-800">
                                    Pendapatan bulanan
                                </label>
                                <input value="{{ $member->pendapatan_bulanan }}" type="number"
                                    name="pendapatan_bulanan" id="pendapatan_bulanan" placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                                    <option value="1" {{ $member->kena_pajak == 1 ? 'selected' : '' }}>Ya</option>
                                    <option value="0" {{ $member->kena_pajak == 2 ? 'selected' : '' }}>Tidak</option>
                                </select>
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <label for="npwp" class="mb-3 block text-lg font-semibold text-gray-800">
                                    NPWP
                                </label>
                                <input value="{{ $member->npwp }}" type="text" name="npwp" id="npwp"
                                    placeholder="Masukkan rt rw Anda"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
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
                            <div id="image-preview" class="mt-4"></div>
                                <span id="file-error" class="text-red-500"></span>
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
    @if ($member->gambar_member && !$errors->has('gambar_member'))
        <script>
            $(document).ready(function() {
                var fileName = "{{ $member->gambar_member }}";
                $('#image-preview').html(`
                <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                    <div class="flex items-center justify-between">
                        <span class="truncate pr-3 text-base font-medium text-textbase">
                            ${fileName}
                        </span>
                    </div>
                </div>
            `);
            });
        </script>
    @endif
    <script>
        $(document).ready(function() {
            $('#gambar_member').change(function(e) {
                var fileName = e.target.files[0].name;
                var fileExt = fileName.split('.').pop();
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').html(`
                    <div class="mb-5 rounded-md border border-[#e0e0e0] py-4 px-8">
                        <div class="flex items-center justify-between">
                            <span class="truncate pr-3 text-base font-medium text-textbase">
                            ${fileName}
                            </span>
                        </div>
                    </div>
                    `);
                };
                reader.readAsDataURL(this.files[0]);
            });
        });
    </script>
@endsection
@push('js')
@endpush
