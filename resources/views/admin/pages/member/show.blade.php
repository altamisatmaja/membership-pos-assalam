@extends('admin.layouts.app')

@section('title', 'Assalam | Member')

@section('content')
    <div class="px-4">
        <section class="container px-4 mx-auto">
            <div class="my-10">
                <div class="w-full">
                    <div class="mb-5">
                        <label for="nomor_pas" class="mb-3 block text-lg font-semibold text-gray-800">
                            Nomor PAS
                        </label>
                        <input disabled value="{{ $members->nomor_pas }}" type="text" name="nomor_pas" id="nomor_pas" placeholder="Nomor pas anda"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="nama_member" class="mb-3 block text-lg font-semibold text-gray-800">
                                Nama
                            </label>
                            <input disabled value="{{ $members->nama_member }}" type="text" name="nama_member" id="nama_member" placeholder="Nama anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="kewarganegaraan" class="mb-3 block text-lg font-semibold text-gray-800">
                                Kewarganegaraan
                            </label>
                            <input disabled value="{{ $members->kewarganegaraan }}" type="text" name="kewarganegaraan" id="kewarganegaraan"
                                placeholder="Masukkan kewarganegaraan anda"
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
                            <input disabled value="{{ $members->tempat_lahir }}" type="text" name="tempat_lahir" id="tempat_lahir" placeholder="Tempat lahir anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="tanggal_lahir" class="mb-3 block text-lg font-semibold text-gray-800">
                                Tanggal lahir
                            </label>
                            <input disabled value="{{ Carbon\Carbon::parse($members->tanggal_lahir)->format('Y-m-d') }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
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
                            <input disabled value="{{ $members->jenis_kelamin }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="agama" class="mb-3 block text-lg font-semibold text-gray-800">
                                Agama
                            </label>
                            <input disabled value="{{ $members->agama }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="provinsi">Provinsi *</label>
                        <input disabled value="{{ $members->provinsi }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div>
                        <label for="kabupaten">Kabupaten *</label>
                        <input disabled value="{{ $members->kabupaten }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="kecamatan">Kecamatan *</label>
                        <input disabled value="{{ $members->kecamatan }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div>
                        <label for="kelurahan">Kelurahan *</label>
                        <input disabled value="{{ $members->kelurahan }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="alamat" class="mb-3 block text-lg font-semibold text-gray-800">
                                Alamat
                            </label>
                            <input disabled value="{{ $members->alamat }}" type="text" name="alamat" id="alamat" placeholder="Tempat lahir anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="rt_rw" class="mb-3 block text-lg font-semibold text-gray-800">
                                RT/RW
                            </label>
                            <input disabled value="{{ $members->rt_rw }}" type="text" name="rt_rw" id="rt_rw" placeholder="Masukkan rt rw Anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="kode_zip" class="mb-3 block text-lg font-semibold text-gray-800">
                                Kode Pos Alamat
                            </label>
                            <input disabled value="{{ $members->kode_zip }}" type="text" name="kode_zip" id="kode_zip" placeholder="Tempat lahir anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="no_hp" class="mb-3 block text-lg font-semibold text-gray-800">
                                No hp
                            </label>
                            <input disabled value="{{ $members->no_hp }}" type="text" name="no_hp" id="no_hp" placeholder="Masukkan no telp Anda"
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
                            <input disabled value="{{ $members->status_member }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="no_telp" class="mb-3 block text-lg font-semibold text-gray-800">
                                No telp
                            </label>
                            <input disabled value="{{ $members->no_telp }}" type="text" name="no_telp" id="no_telp" placeholder="Masukkan no telp Anda"
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
                            <input disabled value="{{ $members->jumlah_tanggungan }}" type="number" name="jumlah_tanggungan" id="jumlah_tanggungan"
                                placeholder="Tempat lahir anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="pendapatan_bulanan" class="mb-3 block text-lg font-semibold text-gray-800">
                                Pendapatan bulanan
                            </label>
                            <input disabled value="{{ $members->pendapatan_bulanan }}" type="number" name="pendapatan_bulanan" id="pendapatan_bulanan"
                                placeholder="Masukkan pendapatan Anda"
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
                            <input disabled value="{{ $members->kena_pajak }}" type="text" name="tanggal_lahir" id="tanggal_lahir"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="npwp" class="mb-3 block text-lg font-semibold text-gray-800">
                                NPWP
                            </label>
                            <input disabled value="{{ $members->npwp }}" type="text" name="npwp" id="npwp" placeholder="Masukkan NPWP Anda"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                </div>


                <div class="mb-6 pt-4">
                    <label class="mb-5 block text-xl font-semibold text-gray-800">
                        Foto member
                    </label>

                    <div class="mb-8">
                        <input disable type="file" name="gambar_member" id="gambar_member" class="sr-only" />
                        <label for="gambar_member"
                            class="relative flex min-h-[200px] items-center justify-center rounded-md border border-dashed border-[#e0e0e0] p-2 text-center">
                            <div>
                                <img src="/uploads/{{ $members->gambar_member }}" alt="">
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </section>
    </div>
    @push('js')
    @endpush
@endsection
