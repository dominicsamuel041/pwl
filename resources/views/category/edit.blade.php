
            <div class="card">
                <div class="card-body">
                    <form method="post" action="{{ route('category.update') }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="number" id="id" name="id" class="form-control" maxlength="60" value="{{ $category->id }}" readonly>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea type="text" id="description" name="description" class="form-control" rows="2" maxlength="255"></textarea>
                        </div>
                    </form>
                </div>
            </div>
