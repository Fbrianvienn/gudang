<div class="card">
    <div class="card-header">
        <a href="#" class="btn btn-primary btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-arrow-left"></i>
            </span>
            <span class="text">Kembali</span>
        </a>
    </div>
    <div class="card-body">
        <form class="user" method="post" action="proses_aduan.php">
        <div class="form-group">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukan Judul Aduan">
        </div>
        <div class="form-group">
            <label>Isi Pengaduan</label>
            <textarea name="isi_aduan" class="form-control" cols="30" rows="5">Masukkan Pengaduan Anda </textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-user">
                Kirim Pengaduan
            </button>
            <button type="reset" class="btn btn-primary btn-user">
                Kosongkan
            </button>
        </div>
        </form>
    </div>
</div>