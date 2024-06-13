<!-- Menghubungkan dengan view template master -->
@extends('welcome')
 
@section('konten')
      <div id="content-img">
        <div class="content1">
          <img src="assets/img/profile.png">
          <h2 class="content-header">Daniel</h2>
          <p class="content-text">
            <b>Siswa</b>
          </p>
        </div>
      </div>
      <!-- Short Description -->
      <section class="section section-small">
        <h2 class="section-header">About</h2>
        <p>My name is Daniel, and my hobby is being a photographer & game developer.</p>
      </section>
      <hr>
      <!-- Skill Table -->
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
      <hr>
      <!-- Education List -->
      <section class="section section-small">
        <h2 class="section-header">Education</h2>
        <h5>SMK Wikrama Bogor</h5>
        <p>TK, SD, SMP Mardi Yuana Bogor | - - - 2023</p>
      </section>
@endsection