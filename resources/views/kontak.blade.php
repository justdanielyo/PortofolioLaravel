<!-- Menghubungkan dengan view template master -->
@extends('welcome')
 
@section('konten')
    <section class="section">
        <h2 class="section-header">Social Media</h2>
          <div class="responsive-table">
            <table>
              <tr class="tr-header">
                <th>&nbsp;</th>
                <th>Account</th>
              </tr>
              <tr>
                <td class="text-left">Facebook</td>
                <td>
                  <a href="facebook.com">Yori Lloyd</a>
                </td>
              </tr>
              <tr>
                <td class="text-left">Instagram</td>
                <td>
                  <a href="instagram.com">@yorilloyd</a>
                </td>
              </tr>
              <tr>
                <td class="text-left">Linked In</td>
                <td>
                  <a href="linkedin.com">@yorilloyd</a>
                </td>
              </tr>
            </table>
          </div>
      </section>
      <hr>
      <!-- Contact -->
      <section class="section">
        <h2 class="section-header">Address</h2>
        <p><b>Home Address </b>: Tajur</p>
        <!-- <p><b>Office Address </b>: 123 Anywhere St., Any City, State, Country 12345</p> -->
      </section>
@endsection