<nav style="background: #1e293b; padding: 12px 20px; border-radius: 8px; margin-bottom: 24px; display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; font-family: sans-serif; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">
    <div style="display: flex; align-items: center; gap: 10px;">
        <span style="font-size: 22px;">📚</span>
        <a href="{{ url('/') }}" style="color: #ffffff; font-weight: bold; font-size: 16px; text-decoration: none; letter-spacing: 0.5px;">Sistem Perpustakaan</a>
    </div>
    <div style="display: flex; align-items: center; gap: 8px; flex-wrap: wrap;">
        <!-- Buku -->
        <a href="{{ route('books.index') }}" style="color: #ffffff; text-decoration: none; padding: 6px 12px; border-radius: 6px; font-size: 13px; background: {{ request()->routeIs('books.index') ? '#2563eb' : '#334155' }};">Daftar Buku</a>
        <a href="{{ route('books.create') }}" style="color: #ffffff; text-decoration: none; padding: 6px 10px; border-radius: 6px; font-size: 13px; background: {{ request()->routeIs('books.create') ? '#16a34a' : '#047857' }};">+ Buku</a>

        <span style="color: #475569; padding: 0 2px;">|</span>

        <!-- Kategori -->
        <a href="{{ route('categories.index') }}" style="color: #ffffff; text-decoration: none; padding: 6px 12px; border-radius: 6px; font-size: 13px; background: {{ request()->routeIs('categories.index') ? '#2563eb' : '#334155' }};">Kategori</a>
        <a href="{{ route('categories.create') }}" style="color: #ffffff; text-decoration: none; padding: 6px 10px; border-radius: 6px; font-size: 13px; background: {{ request()->routeIs('categories.create') ? '#16a34a' : '#047857' }};">+ Kategori</a>

        <span style="color: #475569; padding: 0 2px;">|</span>

        <!-- Anggota -->
        <a href="{{ route('members.index') }}" style="color: #ffffff; text-decoration: none; padding: 6px 12px; border-radius: 6px; font-size: 13px; background: {{ request()->routeIs('members.index') ? '#2563eb' : '#334155' }};">Daftar Anggota</a>
        <a href="{{ route('members.create') }}" style="color: #ffffff; text-decoration: none; padding: 6px 10px; border-radius: 6px; font-size: 13px; background: {{ request()->routeIs('members.create') ? '#ea580c' : '#c2410c' }}; font-weight: bold;">+ Tambah Anggota</a>
    </div>
</nav>