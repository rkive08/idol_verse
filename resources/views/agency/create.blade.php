@extends('layouts.nav')
@section('content')
  <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <p class="text-uppercase text-sm">Create New Agency Data</p>
              <div class="row">
                <form action="{{ route('agency.store') }}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                @csrf
                <div class="col-md-6">
                <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Logo</label>
                    <input class="form-control" type="file" name="logo" id="logoInput" required>
                    <br>
                    <img id="logoPreview" src="#" alt="Preview Logo" style="max-width: 200px; display: none; margin-top: 10px;" />
                </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Agency name</label>
                    <input class="form-control" type="text" name="name" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">CEO name</label>
                    <input class="form-control" type="text" name="CEO" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Link Website (optional)</label>
                    <input class="form-control" type="text" name="website">
                  </div>
                </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-primary-tiketsaya">Create</button>
                        <button onclick="window.location='{{ url('agency') }}'" style="margin-left: 10px;"
                            type="reset" class="btn btn-primary btn-secondary-tiketsaya">Cancel</button>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


<script>
  document.getElementById('logoInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const preview = document.getElementById('logoPreview');

    if (file) {
      const reader = new FileReader();

      reader.onload = function(e) {
        preview.src = e.target.result;
        preview.style.display = 'block'; // Tampilkan gambar
      };

      reader.readAsDataURL(file);
    } else {
      preview.src = '#';
      preview.style.display = 'none';
    }
  });
</script>

@endsection
