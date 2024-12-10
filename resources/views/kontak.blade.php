@extends('welcome')

@section('konten')
<style>
    .section {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        margin: 20px 0;
    }

    .section-header {
        font-size: 24px;
        font-weight: bold;
        color: #007bff;
        margin-bottom: 15px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #f7f7f7;
        text-align: left;
        padding: 10px;
    }

    td {
        padding: 10px;
        text-align: left;
    }

    a {
        color: #337ab7;
        text-decoration: none;
        transition: color 0.3s;
    }

    a:hover {
        color: #0056b3;
        text-decoration: underline;
    }

    .social-icon {
        margin-right: 8px;
        color: #007bff;
    }
</style>

<!-- Social Media Section -->
<section class="section">
    <h2 class="section-header">Social Media</h2>
    <div class="responsive-table">
        <table>
            <tr class="tr-header">
                <th>&nbsp;</th>
                <th>Account</th>
            </tr>
            <tr>
                <td class="text-left">
                    <i class="fab fa-instagram social-icon" aria-hidden="true"></i> Instagram
                </td>
                <td>
                    <a href="https://instagram.com/justdanielyo" target="_blank">@justdanielyo</a>
                </td>
            </tr>
            <tr>
                <td class="text-left">
                    <i class="fab fa-linkedin social-icon" aria-hidden="true"></i> Linkedin
                </td>
                <td>
                    <a href="https://www.linkedin.com/in/justdanielyo/" target="_blank">@justdanielyo</a>
                </td>
            </tr>
        </table>
    </div>
</section>
<hr>

<!-- Contact Section -->
<section class="section">
    <h2 class="section-header">Address</h2>
    <p style="font-size: 18px;">
        <b>Home Address</b>: Tajur
    </p>
</section>
@endsection