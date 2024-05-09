@extends('layouts.app')

@section('title', 'Articles')
@section('content')
<style>
    /* Styles for article page */
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f8f8f8;
            }

            .article-container {
                max-width: 800px;
                margin: 50px auto;
                background-color: #fff;
                padding: 20px;
                border-radius: 8px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .article-image {
                width: 100%;
                border-radius: 8px;
                margin-bottom: 20px;
            }

            .article-title {
                font-size: 24px;
                color: #333;
            }

            .article-author {
                font-style: italic;
                color: #666;
            }

            .article-content {
                color: #444;
                line-height: 1.6;
            }

            .article-content p {
                margin-bottom: 20px;
            }

            .article-date {
                margin-top: 20px;
                font-size: 14px;
                color: #999;
            }

</style>
    <div class="article-container">
        <img class="article-image" src="{{asset('backend/images/elements/01.png')}}" alt="Image de l'article">
        <h1 class="article-title">Titre de l'article</h1>
        <p class="article-author">Auteur de l'article</p>
        <div class="article-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor mattis est, ac rhoncus ipsum tempor id. Nulla facilisi. Vivamus nec commodo magna. Donec nec aliquam nulla. In hac habitasse platea dictumst. Nulla facilisi. In eget nulla et lacus tincidunt malesuada nec in lacus. Ut non mi non sem laoreet aliquet.</p>
            <p>Phasellus dapibus varius ante, nec dapibus velit pretium id. Nulla facilisi. Sed sed mauris nec ex sodales ultricies. Fusce ut lorem in enim consectetur volutpat. Fusce malesuada bibendum lectus. Phasellus venenatis id quam et lacinia. Proin varius libero sit amet nunc gravida hendrerit. Duis congue rhoncus risus, ac tincidunt lacus viverra eget.</p>
        </div>
        <p class="article-date">Date de publication : 10 mai 2024</p>
    </div>

@endsection
