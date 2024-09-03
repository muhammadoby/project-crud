<div class="table-responsive table-card" wire:poll.1s>
    <table class="table text-nowrap table-centered mt-0" style="width: 100%">
        <thead class="table-light">
            <tr>
                <th class="pe-0">
                    No
                </th>
                <th class="ps-1">Nama</th>
                <th>Status</th>
                <th>Ditambahkan Pada</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($variants as $product)
                <tr>
                    <td class="pe-0">
                        {{ $loop->iteration }}
                    </td>
                    <td class="ps-0">
                        <div class="d-flex align-items-center">
                            <div class="ms-3">
                                <h5 class="mb-0">
                                    <span href="#!" class="text-inherit">{{ $product->name }}</span>
                                </h5>
                            </div>
                        </div>
                    </td>
                    <td>
                        @if ($product->is_active)
                            <span class="badge badge-success-soft">Aktif</span>
                        @else
                            <span class="badge badge-danger-soft">Tidak Aktif</span>
                        @endif
                    </td>
                    <td>{{ $product->created_at->diffForHumans() }}</td>
                    <td wire:ignore>
                        <a href="#!" data-bs-toggle="modal" data-bs-target="#updateVariant{{ $product->id }}"
                            class="btn btn-warning">
                            {{-- <i data-feather="edit" class="icon-xs"></i> --}}
                            <span>Edit</span>
                        </a>
                        <div class="modal fade" id="updateVariant{{ $product->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="updateVariant" aria-hidden="true">
                            <div class="modal-dialog modal-md" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="updateVariant">Ubah Varian</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form method="POST" action="{{ route('variant.update', $product->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="menu-name" class="col-form-label">Nama:</label>
                                                <input type="text" name="name" value="{{ $product->name }}"
                                                    class="form-control @error('name') is-invalid @enderror"
                                                    id="menu-name" placeholder="Nama Menu">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="mb-3">
                                                <label for="status" class="col-form-label">Status:</label>
                                                <select name="status"
                                                    class="form-select @error('status') is-invalid @enderror"
                                                    id="status">
                                                    <option hidden>Pilih status</option>
                                                    <option value="1" {{ $product->is_active ? 'selected' : '' }}>
                                                        Aktif</option>
                                                    <option value="0"
                                                        {{ $product->is_active == false ? 'selected' : '' }}>Tidak Aktif
                                                    </option>
                                                </select>
                                                @error('status')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="#!" wire:click="clickDelete({{ $product->id }})" data-bs-toggle="modal"
                            data-bs-target="#deleteConfirm" class="btn btn-danger">
                            {{-- <i data-feather="trash-2" class="icon-xs"></i> --}}
                            <span>Hapus</span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal delete -->
    <div class="modal fade" wire:ignore.self id="deleteConfirm" tabindex="-1" role="dialog"
        aria-labelledby="DeleteConfirmation" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="DeleteConfirmation">Konfirmasi tindakan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin ingin menghapus varian?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" wire:click="delete" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</div>
