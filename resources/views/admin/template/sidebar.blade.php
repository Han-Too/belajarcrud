<style>
    .nav-link:hover{
        background-color: rgb(56, 1, 255);
        color: rgb(255, 255, 255);
    }
</style>
<div class="container mx-4 my-2 shadow-lg fixed" style="border-radius: 1em">
    <div class="px-4 py-4">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('siswa') }}">Siswa</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('guru') }}">Guru</a>
            </li>
        </ul>
    </div>
</div>
