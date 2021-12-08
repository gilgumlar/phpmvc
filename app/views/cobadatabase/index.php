<div class="container">
    <table class="table table-dark mt-5">
        <thead>
            <tr>
                <th scope="col">JUDUL</th>
                <th scope="col">PENULIS</th>
                <th scope="col">TAHUN TERBIT</th>
                <th scope="col">DESKRIPSI</th>
                <th scope="col">GAMBAR</th>
                <th scope="col">TAG</th>
                <th scope="col">BAHASA</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['buku'] as $buku) { ?>
                <tr>
                    <td><?= $buku['judul_buku']; ?></td>
                    <td><?= $buku['penulis_buku']; ?></td>
                    <td><?= $buku['tahun_terbit']; ?></td>
                    <td><?= $buku['deskripsi']; ?></td>
                    <td><?= $buku['gambar']; ?></td>
                    <td><?= $buku['tag']; ?></td>
                    <td><?= $buku['bahasa']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>