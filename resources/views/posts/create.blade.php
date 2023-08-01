<x-layouts.main>
    <x-slot:title>
        Po'st yaratish
    </x-slot:title>
    <x-page-header>
        Po'st Yaratish
    </x-page-header>
    <div class="row">
        <div class="container-fluid py-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="contact-form mb-4">
                    <div id="success"></div>
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <textarea class="form-control p-2" rows="3" name="title" placeholder="Sarlavha" required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group mb-4">
                            <select name="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="control-group mb-4">
                            <select name="tags[]" multiple>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="control-group">
                            <input name="photo" type="file" class="form-control p-4" id="subject"
                                placeholder="Rasm" />
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-2" rows="3" name="short_content" placeholder="Qisqacha Mazmun"
                                required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" name="content" placeholder="Ma'qola" required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit">Saqlash</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
