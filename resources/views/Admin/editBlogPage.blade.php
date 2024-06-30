@extends('Template.templateAdmin')
@section('main')
    <form action="" method="post">
        <div class="row">
            <div class="text-center mb-4">
                <h3>Edit Blog</h3>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-6">
                <div class="card rounded mt-4 shadow text-center border border-black">
                    <div class="my-2">
                        <h5>Information Blog</h5>
                    </div>
                    <div class="mx-2 mb-3">
                        <input type="text" name="" class="form-control p-3 shadow mb-3" placeholder="Seri CRUD Blog"
                            id="" disabled>
                        <input type="text" name="blog_title" class="form-control p-3 shadow mb-3"
                            placeholder="Enter title blog..." id="">
                        <img src="" id="preview-image" class="w-100 mb-3" alt="">
                        <input type="file" name="blog_image" id="input-file-image" class="form-control p-2 shadow mb-3"
                            id="">
                        <input type="text" name="slug_blog" class="form-control p-3 shadow mb-3"
                            placeholder="Enter slug blog..." id="">
                        <textarea name="blog_content" class="form-control shadow mb-3" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="my-4 d-sm-none d-none d-md-block d-lg-block">
                    <button type="submit" class="btn btn-white button-primary">Upload</button>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-6">
                <div class="card rounded mt-4 shadow border border-black">
                    <div class="my-2 text-center">
                        <h5>Add Tag Blog</h5>
                    </div>
                    <div class="mx-2 mb-2">
                        <input type="text" name="tag_blog" class="form-control p-3 shadow mb-3" placeholder="Tag Blog"
                            id="">
                        <div id="new-input-tag-blog">

                        </div>
                    </div>
                    <div class="m-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            onclick="tambahinputantagblog()" class="bi bi-plus-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16" />
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                        </svg>
                    </div>
                </div>
            </div>

        </div>
        <div class="my-4 d-sm-block d-md-none d-lg-none">
            <button type="submit" class="btn btn-white button-primary">Upload</button>
        </div>
    </form>
@endsection
