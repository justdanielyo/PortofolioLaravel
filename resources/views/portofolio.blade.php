@extends('welcome')

@section('konten')
<style>
    .section {
        padding: 30px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .section-header {
        text-align: center;
        font-size: 28px;
        color: #007bff;
        margin-bottom: 20px;
    }

    .gallery {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .images {
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .images:hover {
        transform: scale(1.05);
    }

    .gallery-img {
        width: 100%;
        height: auto;
        border-radius: 10px;
        transition: transform 0.3s;
    }

    .gallery-img:hover {
        transform: scale(1.1);
    }

    figcaption {
        text-align: center;
        padding: 10px;
        background-color: #fff;
        border-radius: 0 0 10px 10px;
    }

    .name {
        font-size: 18px;
        color: #333;
        margin: 0;
    }

    .name span a {
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }

    .name span a:hover {
        text-decoration: underline;
    }
</style>

<section class="section">
    <h2 class="section-header">Portofolio</h2>
    <div class="gallery">
        <figure class="images">
            <img src="../assets/img/BahanBakar.png" class="gallery-img" alt="BahanBakar Project" />
            <figcaption>
                <h5 class="name">BahanBakar | Project 1
                    <span>
                        <a href="http://yorilloyd.free.nf/oop/?i=1">Detail</a>
                    </span>
                </h5>
            </figcaption>
        </figure>
        <figure class="images">
            <img src="../assets/img/RentalMotor.png" class="gallery-img" alt="RentalMotor Project" />
            <figcaption>
                <h5 class="name">RentalMotor | Project 2
                    <span>
                        <a href="http://yorilloyd.free.nf/oop/RentalMotor.php">Detail</a>
                    </span>
                </h5>
            </figcaption>
        </figure>
        <figure class="images">
            <img src="../assets/img/" class="gallery-img" alt="Project 3" />
            <figcaption>
                <h5 class="name">Project 3
                    <span>
                        <a href="detail.html">Detail</a>
                    </span>
                </h5>
            </figcaption>
        </figure>
    </div>
</section>
@endsection