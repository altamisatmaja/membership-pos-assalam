@extends('pelanggan.layouts.app')

@section('title', 'Dashboard | Pelanggan')

@section('content')
    <div class="flex flex-col justify-center w-full">
        <div
            class="relative flex flex-col items-center rounded-[20px] w-full mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 p-3">
            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700">
                    Informasi Pribadi
                </h4>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 px-2 w-full">
                @php
                    $user = auth()->user();
                    $member = $user->member;

                    $fields = [
                        'name' => 'Nama',
                        'email' => 'Email',
                        'nomor_pas' => 'Nomor Pas',
                        'nama_member' => 'Nama Member',
                        'kewarganegaraan' => 'Kewarganegaraan',
                        'tempat_lahir' => 'Tempat Lahir',
                        'tanggal_lahir' => 'Tanggal Lahir',
                        'jenis_kelamin' => 'Jenis Kelamin',
                        'agama' => 'Agama',
                        'alamat' => 'Alamat Lengkap',
                        'provinsi' => 'Provinsi',
                        'kabupaten' => 'Kabupaten',
                        'kecamatan' => 'Kecamatan',
                        'kelurahan' => 'Kelurahan',
                        'rt_rw' => 'RT/RW',
                        'kode_zip' => 'Kode ZIP',
                        'no_hp' => 'No HP',
                        'no_telp' => 'Nomor Telepon',
                        'status' => 'Status',
                        'jumlah_tanggungan' => 'Jumlah Tanggungan',
                        'pendapatan_bulanan' => 'Pendapatan Bulanan',
                        'kena_pajak' => 'Kena Pajak',
                        'npwp' => 'NPWP',
                    ];
                @endphp

                @foreach ($fields as $field => $label)
                    @php
                        $value = $user->{$field} ?? ($member->{$field} ?? 'N/A');

                        if ($field === 'tanggal_lahir' && $value !== 'N/A') {
                            $value = \Carbon\Carbon::parse($value)->format('d-m-Y');
                        }

                        if ($field === 'kena_pajak') {
                            $value = $value ? 'Iya' : 'Tidak';
                        }

                        if($field === 'pendapatan_bulanan'){
                            $value = 'Rp '.number_format($value,0,',','.');
                        }

                    @endphp
                    <div
                        class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500">
                        <p class="text-sm text-gray-600">{{ $label }}</p>
                        <p class="text-base font-medium text-navy-700">
                            {{ $value }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@push('js')
@endpush
