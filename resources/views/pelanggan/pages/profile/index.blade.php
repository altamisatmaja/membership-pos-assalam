@extends('pelanggan.layouts.app')

@section('title', 'Dashboard | Pelanggan')

@section('content')
    <div class="flex items-center justify-center p-5">
        <div class="mx-auto w-full">
            @if (session('success'))
                <div id="Message"
                    class="fixed top-0 left-0 w-full h-full flex justify-center items-center backdrop-blur-md bg-white/30 bg-opacity-50 z-50">
                    <div class="relative w-full max-w-screen-md rounded-lg bg-green-500 px-4 py-4 text-base text-white"
                        data-dismissible="alert">
                        <div class="absolute top-4 left-4">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"
                                class="mt-px h-6 w-6">
                                <path fill-rule="evenodd"
                                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div class="ml-8 mr-12">
                            <h5
                                class="block font-sans text-xl font-semibold leading-snug tracking-normal text-white antialiased">
                                Berhasil
                            </h5>
                            <p class="mt-2 block font-sans text-base font-normal leading-relaxed text-white antialiased">
                                {{ session('success') }}
                            </p>
                        </div>
                        <div data-dismissible-target="alert" data-ripple-dark="true" id="successMessage"
                            class="absolute top-3 right-3 w-max rounded-lg transition-all hover:bg-white hover:bg-opacity-20">
                            <div role="button" class="w-max rounded-lg p-1">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12">
                                    </path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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
            <div class="my-3">
                <div>
                    <h4 class="text-2xl font-bold text-gray-800 my-2">
                        Ubah data member Anda
                    </h4>
                </div>
                <form action="{{ route('customer.dashboard.edit') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="w-full">
                        <div class="mb-5">
                            <label for="nomor_pas" class="mb-3 block text-lg font-semibold text-gray-800">
                                Nomor PAS
                                <div class="">
                                    <span class="font-medium text-base text-gray-600">Nomor PAS Anda tidak dapat
                                        diubah</span>
                                </div>
                            </label>
                            <input value="{{ $member->nomor_pas }}" readonly disabled type="text" name="nomor_pas"
                                id="nomor_pas" placeholder="Nomor pas anda"
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
                                <input value="{{ Carbon\Carbon::parse($member->tanggal_lahir)->format('Y-m-d') }}"
                                    type="date" name="tanggal_lahir" id="tanggal_lahir"
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
                                    <option value="Hindu" {{ $member->agama == 'Hindu' ? 'selected' : '' }}>Hindu
                                    </option>
                                    <option value="Budha" {{ $member->agama == 'Budha' ? 'selected' : '' }}>Budha
                                    </option>
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
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-4 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>


                    <div class="mb-6 pt-4">
                        <label class="mb-5 block text-xl font-semibold text-gray-800" for="gambar_member">
                            Foto anda
                        </label>

                        <div class="mb-8">
                            <input type="file" name="gambar_member" id="gambar_member" class="sr-only"
                                value="{{ $member->gambar_member }}" />
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
                        <button type="submit" onclick="return confirm('Apakah anda yakin ingin mengubah?')"
                            class="w-full hover:shadow-form rounded-md bg-green-700 py-3 px-8 text-center text-base font-semibold text-white outline-none">
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

        document.addEventListener('DOMContentLoaded', function() {
            var successMessage = document.getElementById('successMessage');
            var Message = document.getElementById('Message');
            successMessage.addEventListener('click', function() {
                Message.style.display = 'none';
            });
        });
    </script>
@endsection
@push('js')
@endpush
