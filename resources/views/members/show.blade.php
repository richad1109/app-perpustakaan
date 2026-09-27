@extends('layouts.app')

@section('title', 'Detail Anggota')

@section('content')
    <h1>Detail Anggota</h1>
    <p><a href="{{ route('members.index') }}">&larr; Kembali ke daftar anggota</a></p>

    <table>
        <tr>
            <th style="width: 160px; background: #f3f4f6;">Nama Lengkap</th>
            <td>{{ $member->nama }}</td>
        </tr>
        <tr>
            <th style="background: #f3f4f6;">NIM</th>
            <td>{{ $member->nim }}</td>
        </tr>
        <tr>
            <th style="background: #f3f4f6;">Email</th>
            <td>{{ $member->email }}</td>
        </tr>
        <tr>
            <th style="background: #f3f4f6;">Nomor Telepon</th>
            <td>{{ $member->nomor_telepon }}</td>
        </tr>
        <tr>
            <th style="background: #f3f4f6;">Alamat</th>
            <td>{{ $member->alamat }}</td>
        </tr>
        <tr>
            <th style="background: #f3f4f6;">Status</th>
            <td>
                <span style="display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: bold; background: {{ $member->status === 'aktif' ? '#d1fae5' : '#fee2e2' }}; color: {{ $member->status === 'aktif' ? '#065f46' : '#991b1b' }};">
                    {{ ucfirst($member->status) }}
                </span>
            </td>
        </tr>
    </table>
@endsection