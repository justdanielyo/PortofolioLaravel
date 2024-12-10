@extends('welcome')

@section('konten')
<style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #eaeaea;
    margin: 0;
    padding: 0;
  }

  #content-img {
    background-color: #f7f7f7;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    text-align: center;
    transition: transform 0.3s;
  }

  #content-img:hover {
    transform: scale(1.02);
  }

  #content-img img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 20px;
    border: 3px solid #007bff;
    transition: transform 0.3s;
  }

  #content-img img:hover {
    transform: scale(1.1);
  }

  .section {
    background-color: #fff;
    padding: 30px;
    margin: 20px 0;
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
  }

  .section-header {
    font-size: 28px;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 15px;
    text-align: center;
  }

  .content-text {
    font-size: 20px;
    color: #555;
    text-align: center;
  }

  table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }

  th, td {
    padding: 12px;
    text-align: left;
  }

  th {
    background-color: #007bff;
    color: white;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #d1e7dd;
  }

  .education {
    font-size: 18px;
    color: #555;
    margin: 5px 0;
  }

  hr {
    border: 1px solid #007bff;
    margin: 20px 0;
  }
</style>

<!-- Content Image Section -->
<div id="content-img">
  <img src="assets/img/fotowk.jpg" alt="Daniel's Photo">
  <h2 class="content-header">Daniel</h2>
  <p class="content-text"><b>Siswa</b></p>
</div>

<!-- Short Description Section -->
<section class="section section-medium">
  <h2 class="section-header">About</h2>
  <p class="content-text">My name is Daniel, and my hobby is being a photographer & game developer.</p>
</section>

<!-- Skill Table Section -->
<section class="section">
  <h2 class="section-header">Skill</h2>
  <div class="responsive-table">
    <table>
      <tr class="tr-header">
        <th>&nbsp;</th>
        <th>Percent</th>
      </tr>
      <tr>
        <td class="text-left">HTML</td>
        <td>95%</td>
      </tr>
      <tr>
        <td class="text-left">CSS</td>
        <td>75%</td>
      </tr>
      <tr>
        <td class="text-left">PHP</td>
        <td>45%</td>
      </tr>
      <tr>
        <td class="text-left">Laravel</td>
        <td>25%</td>
      </tr>
    </table>
  </div>
</section>

<!-- Education List Section -->
<section class="section section-medium">
  <h2 class="section-header">Education</h2>
  <h5 class="education">2023 - Now | SMK Wikrama Bogor | Software and Game Development</h5>
  <h5 class="education">2020 - 2023 | SMP Mardi Yuana Bogor</h5>
  <h5 class="education">2014 - 2020 | SD Mardi Yuana Bogor</h5>
  <h5 class="education">2013 - 2014 | TK Mardi Yuana Bogor</h5>
  {{-- <p class="education">TK, SD, SMP Mardi Yuana Bogor | - - - 2023</p> --}}
</section>
@endsection