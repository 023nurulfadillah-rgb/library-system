<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Library System')</title>
</head>
<body>

    <header>
        <h1>Library System</h1>

        @auth
            <p>
                Halo, {{ auth()->user()->name }} ({{ auth()->user()->role }})
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            </p>
        @endauth
    </header>

    <nav>
        <a href="/dashboard">Dashboard</a> |
        <a href="/books">Books</a> |
        <a href="/categories">Categories</a> |
        <a href="/members">Members</a>
        @can('manage-users')
            | <a href="{{ route('users.index') }}">Kelola Pengguna</a>
        @endcan
    </nav>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Library System - Nurul Fadillah</p>
    </footer>

</body>
</html>