<footer class="content-info">
  <table class="footer-table">
    <tbody>
      <tr>
        <td class="footer-logo-cell" colspan="2">
          <img class="footer-logo" src="@asset('images/logo-hollow.png')" alt="{!! $siteName !!}">
          <p class="footer-address">International Project Studio d.o.o., Celjska 39, 10 000 Zagreb</p>
        </td>
      </tr>
      <tr>
        <td class="footer-cell" rowspan="1"><a href="{{ home_url('/') }}">Projektiranje</a></td>
        <td class="footer-cell-center" rowspan="1">gsm: 385 (0)97 797 47 80</td>
      </tr>
      <tr>
        <td class="footer-cell" rowspan="1"><a href="{{ home_url('/o-nama') }}">O nama</a></td>
        <td class="footer-cell-center" rowspan="1">mihaela@interprojekt-studio.com</td>
      </tr>
      <tr>
        <td class="footer-cell" rowspan="1"><a href="{{ home_url('/galerija') }}">Galerija</a></td>
        <td class="footer-cell-center" rowspan="1">datum: @php echo date("d.m.Y"); @endphp</td>
      </tr>
      <tr>
        <td class="footer-cell" rowspan="1"><a href="{{ home_url('/partneri') }}">Partneri</a></td>
        <td class="footer-cell-center" colspan="2" rowspan="2">Trenutna Lokacija: <h4>{!! $title !!}</h4></td>
      </tr>
      <tr>
        <td class="footer-cell" rowspan="1"><a href="{{ home_url('/kontakt') }}">Kontakt</a></td>
      </tr>
    </tbody>
  </table>

</footer>
