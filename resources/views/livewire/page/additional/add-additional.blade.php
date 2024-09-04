<div>
    <div class="flex-grow-1">
        <a href="#!" data-bs-toggle="modal" data-bs-target="#addNewData" class="btn btn-primary">+ Tambah Data Baru</a>
    </div>

    <div class="modal fade" wire:ignore.self id="addNewData" tabindex="-1" role="dialog" aria-labelledby="addNewData" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addNewData">Tambah data baru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form wire:submit="create">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="menu-name" class="col-form-label">Nama:</label>
                            <input type="text" wire:model="name"
                                class="form-control @error('name') is-invalid @enderror" id="menu-name"
                                placeholder="Nama">
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    <div class="mb-3">
                        <label for="description" class="col-form-label">Deskripsi:</label>
                            <textarea wire:model="description" placeholder="Deskripsi" id="description" class="form-control @error('description') is-invalid @enderror" cols="30" rows="10"></textarea>                                    
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                        <div class="mb-3">
                            <label for="status" class="col-form-label">Status:</label>
                            <select wire:model="status" class="form-select @error('status') is-invalid @enderror"
                                id="status">
                                <option hidden>Pilih status</option>
                                <option value="1" selected>Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
