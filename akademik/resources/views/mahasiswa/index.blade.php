@extends('layouts.app')

@section('content')
    <div class="bg-white p-6 rounded-lg shadow">
        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">Data Mahasiswa</h2>
                <p class="text-gray-600 text-sm">Kelola daftar seluruh mahasiswa aktif.</p>
            </div>
            <a href="{{ route('mahasiswa.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition">+ Tambah Mahasiswa</a>
        </div>

        @if (session('success'))
            <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg">
                <thead>
                    <tr class="bg-gray-100 border-b text-left text-gray-600 text-sm font-semibold">
                        <th class="py-3 px-4 border-r">No</th>
                        <th class="py-3 px-4 border-r">NIM</th>
                        <th class="py-3 px-4 border-r">Nama Mahasiswa</th>
                        <th class="py-3 px-4 border-r">Program Studi</th>
                        <th class="py-3 px-4 border-r">Angkatan</th>
                        <th class="py-3 px-4 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700 text-sm">
                    @forelse ($mahasiswa as $index => $mhs)
                        <tr class="border-b hover:bg-gray-50">
                            <td class="py-3 px-4 border-r">{{ $index + 1 }}</td>
                            <td class="py-3 px-4 border-r font-medium">{{ $mhs->nim }}</td>
                            <td class="py-3 px-4 border-r">{{ $mhs->nama }}</td>
                            <td class="py-3 px-4 border-r">{{ $mhs->prodi }}</td>
                            <td class="py-3 px-4 border-r">{{ $mhs->angkatan }}</td>
                            <td class="py-3 px-4 text-center space-x-2">
                                <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-xs font-semibold">Edit</a>
                                <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-xs font-semibold">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-4 text-center text-gray-500">Belum ada data mahasiswa.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection