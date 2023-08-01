<x-layouts.main>
    <x-slot:title>
        Po'stni O'zgartirish #{{ $post->id }}
    </x-slot:title>
    <x-page-header>
        Po'stni O'zgartirish #{{ $post->id }}
    </x-page-header>
    <div class="row">
        <div class="container-fluid py-5">
            <div class="col-lg-4 mb-4 mb-lg-0">
                <div class="contact-form">
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
                    <form action="{{ route('posts.update', ['post' => $post->id]) }}" method="POST"
                        enctype="multipart/from-data">
                        @csrf
                        @method('PUT')
                        <div class="control-group">
                            <input type="text" class="form-control p-4 " name='title' value="{{ $post->title }}"
                                placeholder="Sarlavha" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="file" class="form-control p-4" id="subject" placeholder="Rasm" />
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-2" rows="3" name="short_content"  placeholder="Qisqacha Mazmun">{{ $post->short_content }}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" name="content" placeholder="Ma'qola" required="required">{{ $post->content }}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="flex">
                            <button class="btn btn-success  py-3 px-5" type="submit">Saqlash</button>

                            <a class="btn btn-danger  py-3 px-5" href="{{ route('posts.show',['post'=>$post->id]) }}">
                                Bekor Qilish
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.main>
