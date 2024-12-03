<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans leading-normal tracking-normal">

  <!-- Navbar -->
  <nav class="bg-blue-600 text-white p-4">
    <div class="container mx-auto flex justify-between items-center">
      <div class="flex items-center">
        <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2">
        <span class="font-bold text-lg">Aplikasi Tahanan</span>
      </div>
      <div class="space-x-4">
        <a href="/home" class="hover:underline">Home</a>
        <a href="/ajuan-pengunjungan" class="hover:underline">Ajuan Pengunjungan</a>
      </div>
    </div>
  </nav>

  <!-- Form Ajuan Pengunjungan -->
  <div class="container mx-auto mt-8">
    <div class="bg-white p-8 rounded shadow-lg border border-gray-200">
      <h2 class="text-2xl font-bold mb-6">Form Ajuan Pengunjungan Tahanan</h2>
      <form action="{{ route('kunjungan.store') }}" method="POST"  enctype="multipart/form-data">
        @csrf
        <!-- Jenis Kunjungan -->
        <div class="mb-4">
          <label for="tipe_kunjungan" class="block text-gray-700 font-medium mb-2">Jenis Kunjungan</label>
          <select id="tipe_kunjungan" name="tipe_kunjungan" class="w-full p-2 border border-gray-300 rounded">
            <option value="offline">Offline</option>
            <option value="online">Online</option>
          </select>
        </div>

        <!-- Nama Tahanan -->
        <div class="mb-4">
          <label for="nama_tahanan" class="block text-gray-700 font-medium mb-2">Nama Tahanan</label>
          <input type="text" id="nama_tahanan" name="nama_tahanan" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <!-- Nama Pengunjung -->
        <div class="mb-4">
          <label for="nama_pengunjung" class="block text-gray-700 font-medium mb-2">Nama Pengunjung</label>
          <input type="text" id="nama_pengunjung" name="nama_pengunjung" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <!-- Alamat -->
        <div class="mb-4">
          <label for="alamat" class="block text-gray-700 font-medium mb-2">Alamat</label>
          <textarea id="alamat" name="alamat" class="w-full p-2 border border-gray-300 rounded" rows="3" required></textarea>
        </div>

        <!-- NIK -->
        <div class="mb-4">
          <label for="nik" class="block text-gray-700 font-medium mb-2">NIK</label>
          <input type="text" id="nik" name="nik" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <!-- Foto KTP -->
        <div class="mb-4">
          <label for="foto_ktp" class="block text-gray-700 font-medium mb-2">Foto KTP</label>
          <input type="file" id="foto_ktp" name="foto_ktp" class="w-full p-2 border border-gray-300 rounded" accept="image/*" required>
        </div>

        <!-- No HP -->
        <div class="mb-4">
          <label for="nomor_hp" class="block text-gray-700 font-medium mb-2">No. HP</label>
          <input type="text" id="nomor_hp" name="nomor_hp" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <!-- Hubungan -->
        <div class="mb-4">
          <label for="hubungan" class="block text-gray-700 font-medium mb-2">Hubungan</label>
          <input type="text" id="hubungan" name="hubungan" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

         <!-- Hari -->
         <div class="mb-4">
          <label for="hari" class="block text-gray-700 font-medium mb-2">Hari</label>
          <input type="date" id="hari" name="hari" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <!-- Hari -->
        <!-- <div class="mb-4">
          <label for="hari" class="block text-gray-700 font-medium mb-2">Hari</label>
          <select id="hari" name="hari" class="w-full p-2 border border-gray-300 rounded">
            <option value="senin">Senin</option>
            <option value="selasa">Selasa</option>
            <option value="rabu">Rabu</option>
            <option value="kamis">Kamis</option>
            <option value="jumat">Jumat</option>
            <option value="sabtu">Sabtu</option>
            <option value="minggu">Minggu</option>
          </select> -->
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
          <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kirim Ajuan</button>
        </div>
      </form>
    </div>
  </div>

</body>
</html>
