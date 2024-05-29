@extends('admin.layouts.app')

@section('title', 'Assalam | Member')

@section('content')
    <div class="pt-6 px-4">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
            <h1 class="text-2xl font-bold mb-2">Aktivasi member</h1>
            <form action="{{ route('admin.dashboard.activate.update', $member->nomor_pas) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class=" text-lg font-bold mb-2" for="nama_member">
                            Nama
                        </label>
                        <input readonly disabled
                            class="appearance-none text-gray-600 w-full bg-grey-lighter  border border-red rounded py-3 px-4 mb-3"
                            id="nama_member" name="nama_member" type="text" value="{{ $member->nama_member }}">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class=" text-lg font-bold mb-2" for="nomor_pas">
                            Nomor PAS
                        </label>
                        <input readonly disabled
                            class="appearance-none text-gray-600 w-full bg-grey-lighter  border border-grey-lighter rounded py-3 px-4"
                            id="nomor_pas" name="nomor_pas" type="text" value="{{ $member->nomor_pas }}">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-3">
                    <div class="md:w-full px-3">
                        <label class=" text-lg font-bold mb-2" for="nama_member">
                            Masa Aktif
                        </label>
                        <select name="masa_aktif" id="masa_aktif"
                            class="border py-4 px-6 text-base font-medium rounded w-full">
                            <option value="1">1 Tahun</option>
                            <option value="2">2 Tahun</option>
                            <option value="3">3 Tahun</option>
                        </select>
                    </div>
                </div>
                <div class="w-full mx-auto justify-center items-center mt-5">
                    <button type="submit"
                        class="w-full hover:shadow-form rounded-md bg-green-800 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Aktivasi
                    </button>
                </div>
            </form>
        </div>

    </div>
    @push('js')
    @endpush
@endsection
