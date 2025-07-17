@props(['action', 'id'])

<!-- Hidden form -->
<form id="delete-form-{{ $id }}" action="{{ $action }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<!-- Tombol delete -->
<button type="button" class="btn btn-icon btn-2 btn bg-gradient-danger"
    onclick="confirmDelete({{ $id }})">
    <span class="btn-inner--icon"><i class="fa-solid fa-trash"></i></span>
</button>
