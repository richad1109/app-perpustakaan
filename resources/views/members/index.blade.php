@extends('layouts.app')

@section('title', 'Daftar Anggota')

@section('content')
    <h1>Daftar Anggota Perpustakaan</h1>

    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 16px;">
        <a href="{{ route('members.create') }}" class="btn">+ Tambah Anggota</a>

        <!-- Form Pencarian Nama Anggota -->
        <form action="{{ route('members.index') }}" method="GET" style="display: flex; gap: 8px;">
            <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama anggota..." style="padding: 6px 12px; border: 1px solid #ccc; border-radius: 4px; width: 220px;">
            <button type="submit" class="btn" style="background: #4b5563; padding: 6px 12px;">Cari</button>
            @if(request('search'))
                <a href="{{ route('members.index') }}" class="btn" style="background: #9ca3af; padding: 6px 10px;">Reset</a>
            @endif
        </form>
    </div>

    @if(request('search'))
        <p style="font-size: 14px; color: #4b5563;">Menampilkan hasil pencarian untuk: <strong>"{{ request('search') }}"</strong></p>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No. Telepon</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->nim }}</td>
                    <td>{{ $member->nama }}</td>
                    <td>{{ $member->email }}</td>
                    <td>{{ $member->nomor_telepon }}</td>
                    <td>
                        <span style="display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; background: {{ $member->status === 'aktif' ? '#d1fae5' : '#fee2e2' }}; color: {{ $member->status === 'aktif' ? '#065f46' : '#991b1b' }};">
                            {{ ucfirst($member->status) }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('members.show', $member->id) }}">Detail</a>
                        |
                        <a href="{{ route('members.edit', $member->id) }}">Edit</a>
                        |
                        <form class="inline" action="{{ route('members.destroy', $member->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="background:#dc2626; padding: 3px 8px; font-size: 12px;" onclick="return confirm('Yakin ingin menghapus anggota ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data anggota{{ request('search') ? ' yang cocok dengan pencarian' : '' }}.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="margin-top: 16px;">
        {{ $members->appends(request()->query())->links() }}
    </div>
@endsection