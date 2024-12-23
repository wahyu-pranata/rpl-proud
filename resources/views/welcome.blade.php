<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>PROUD</title>

  <!-- Styles / Scripts -->
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  @vite('resources/js/dropdown.js')
</head>

<body>
  <div class="font-hind ">
    <x-navbar auth='admin'></x-navbar>
    <div class="relative w-screen h-[36em] overflow-hidden">
      <div class="absolute inset-0 bg-black bg-opacity-30"></div>
      <div class="absolute h-[60%] w-1 bg-light-primary left-[6em]"></div>
      <div class="absolute bottom-0 h-[5%] w-1 bg-light-primary left-[6em]"></div>
      <p class="absolute bottom-14 w-[25em] left-[4em] text-light-primary tracking-widest text-lg">Proud (Program Kerja
        Udayana) adalah platform bagi mahasiswa Universitas Udayana
        untuk berpartisipasi dalam program kerja kampus yang diselenggarakan oleh berbagai
        organisasi mahasiswa. </p>
      <header
        class="absolute top-[30%] w-fit h-fit left-[22%] text-[3em] font-semibold text-light-primary tracking-[0.3em]">
        PROGRAM KERJA UDAYANA</header>
      <img class="mt-[-13em] min-w-full min-h-[50em]" src="{{ asset('images/cover.webp') }}" alt="">
    </div>
  </div>
  <div class="overflow-hidden text-nowrap bg-dark-blue">
    <div
      class="inline-block animate-slide py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
    </div>
    <div
      class="inline-block animate-slide py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
    </div>
  </div>
  <div id="problem" class="py-40 space-y-10" x-init="selectedLevel = 'Universitas';" x-data="{ selectedLevel: 'Universitas' }">
    <div class="font-hind mx-10">
      <header class="text-[2.8em] font-semibold tracking-widest">OPEN RECRUITMENTS</header>
      <p class="text-[18px]">Ayo daftarkan dirimu dalam kegiatan-kegiatan kepanitiaan yang menarik, kami tunggu
        kontribusi kalian!</p>
    </div>
    @php
      $auth = 'mahasiswa';
      $filters = ['Universitas', 'Fakultas', 'Program Studi'];
      $proker = [
          'proker 1' => '',
          'proker 2' => '',
          'proker 3' => '',
          'proker 4' => '',
          'proker 5' => '',
          'proker 6' => '',
          'proker 7' => '',
          'proker 8' => '',
      ];
    @endphp
    <div class="mx-10 w-fit">
      @auth
        @if (auth()->user()->type == 'organization')
          <a href="/addproker">
            <x-primary-button>Tambah</x-primary-button>
          </a>
        @elseif (auth()->user()->type == 'student')
          <div>
            <x-select-field fieldText="Universitas">
              @foreach ($filters as $filter)
                <li x-on:click="selectedLevel = @js($filter)">{{ $filter }}</li>
              @endforeach
            </x-select-field>
          </div>
        @endif
      @endauth
      @guest
        <a href="/login">
          <x-dropdown :items="$filters">Filter</x-dropdown>
        </a>
      @endguest
    </div>
    @if ($auth == 'admin' or $auth == 'mahasiswa')
      <div class="mySwiper">
        <div class="swiper-wrapper">
          @foreach ($proker as $namaProker => $poster)
            <a class="swiper-slide" href="">
              <div class="flex flex-col mb-2">
                <span class="text-xl w-4/5 overflow-ellipsis">{{ $namaProker }}</span>
                <span class="text-sm text-dark-primary">Waktu Proker</span>
              </div>
              <img src="" class="h-[24em] w-[-16em] bg-slate-300 rounded-xl" />
            </a>
          @endforeach
        </div class="swiper-pagination">
      </div>
  </div>
@else
  <div class="mySwiper">
    <div class="swiper-wrapper">
      @foreach ($proker as $namaProker => $poster)
        <a class="swiper-slide" href="/login">
          <div class="flex flex-col">
            <span class="text-xl w-4/5 overflow-ellipsis">{{ $namaProker }}</span>
            <span class="text-sm text-dark-primary">Waktu Proker</span>
          </div>
          <div id='img' class="h-[24em] w-[-16em] bg-slate-300 rounded-xl"></div>
        </a>
      @endforeach
    </div class="swiper-pagination">
  </div>
  </div>
  @endif
  </div>
  <div id="wrong" class="overflow-hidden text-nowrap bg-dark-blue">
    <div
      class="inline-block animate-slidereverse py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
    </div>
    <div
      class="inline-block animate-slidereverse py-4 text-2xl text-light-primary space-x-[5em] tracking-widest font-libre px-[2.45em]">
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
      <span>Unggul</span>
      <span>Mandiri</span>
      <span>Berbudaya</span>
    </div>
  </div>
  <div class="bg-[#1e1e1e] pt-10 pb-40 px-44 w-full flex justify-between tracking-widest">
    <div class="flex items-center space-x-12">
      <img class="w-[12em]" src="{{ asset('images/udayana.webp') }}" alt="">
      <div class="text-light-primary space-y-10">
        <span class="text-4xl font-semibold">Universitas Udayana</span>
        <p class="w-[25em]">Jl. Kampus Udayana Bukit Jimbaran, Jimbaran, Kuta Selatan, Kabupaten Badung, Bali 80361</p>
      </div>
    </div>
    <div class="mt-24 text-light-primary space-y-10">
      <div class="flex flex-col">
        <span class="text-4xl font-semibold pb-4">Contact</span>
        <span>(0361) 701806</span>
        <span>usdi@unud.ac.id</span>
      </div>
      <div class="flex flex-col space-y-4">
        <span class="text-4xl font-semibold">Social Media</span>
        <div class="flex space-x-2">
          <a href="">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="35" height="35" fill="url(#pattern0_142_98)" />
              <defs>
                <pattern id="pattern0_142_98" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_142_98" transform="scale(0.0111111)" />
                </pattern>
                <image id="image0_142_98" width="90" height="90"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEyElEQVR4nO2cy29VVRSHLwOKjqsDCpiAMaKiWIsSHo1xaKLEKY8pCcrDmTiCONKgYUSBBhgCaqLgA5Uo8Q8wGA0+agLqEAExpcRabtvPrHQRSune99G1zzl37/0lN2lu2rXW+eV0nbXX3mfVaplMJpPJZDKZTCaTIsAC4AXgLeAU8AtwHbhFeYxpDD9rTBLb8xJrrdMAngEGgX/oHK4Dh4Cna1UHWAl8QWczCXwOPFWrGsB9wH6gTjzUgffk2mpVAHgE+IF4+R54uGyRVwFXiJ+/gTVlifwscIN0uAH0lZEurpIefwHLinzwSd5KlR+B+4sQWqqL1NkXWuQnIyvh2kU0WBlS6C/bDi0+Pg0lcq+ummJiDHgD6NHPbv2uGSaDLNe1dxEbu2e5ThG7WQ6G6MJ1UoOoWXpmuVa5s1tZyHRZCi2tThIRelGLNvothZaeLYmkjjdbtLHXUujTxMmY5uR2Hoa3+dhSaNkZKYOLwACwUauebmC+frr1u03yUAIulRTjT5ZCXysw8HHgBLC2xRjnAeuAk2qjKK5aCt3qv1O7nAUeNYj3MeCbgmL+z0blqcBD8y+w1SzgO3FvA0ZDB28ZcEiuyAaCWbD3xv5c6JauZbAhRV5uFqg/lQQT2zLQUOliVRO+HwJ2Al8BQ8BN/QzpdzuAJU3YWR0qjVRd6K0NfC4GjjVZQcjvHJVVXQObr6Ym9NkG/l4BRtrc19vQwPa5VIQe95VwwOvAxBzsy9/u8th/3LrOrqrQxxvcyXMR+TYTvjsb+IAEhF7rycntpAtfGulx+Fofu9AXZans8CEPPmuOeJbrf8Qs9ICnhAvRnxCbix0+D8cs9EaHfamTQ7Hd4XNzzEL3lrC7fsbhsy9mobsd9n8jHEMOnw/GLHSXw75ltTGTEc+GswlZ6CmGUxS622E/pw5joXsdQueHobHQmxxCS6szFK85fG6xcjCHZHFPUFYcdNhfEmjBUvcsWAZjFvqSZwku/WRrBj1L8D9jFlpY5/CxyPidmGFgocNXv6Gfygp90uPnRaMUIm3Slz1+PiQBocdls9Tja5dB43+nx/4Ko5535YUWvm7gb0ObaUTSxUseu5Kbv8WYKgstbGvgUw4dHmkyldS1iljYwGaQMrLqQo/K4ZYmfMvOy3Z9mf9X7YuM6M9npE52lXAz7KyR41spCo0eanHma8P4nwh5UNMyUAKLvdos2Nnv5KCnYS2DDc2oHG4xC/jOg29HqHQxnU48tntOzl0YxLsiRHVRxLHdIg+iTwDv65GAeS3ewf26GDGtk4s8iF7WqxW/6271Zt3jk9cpuvTzgH63RUs7s+MDZb5aEevLQhZ8ZCl0rK+/WbDHUuhYX+i0YL2l0At0LlzmbqRImG8mtPURqog4YCpyxGMk5sJksCGE2sTJTHE6iMjTmjNlDnCtCvXgIzWBd8u+ygrwTlCRp1Ug50mX7wobgSyzOnXYXmpcBpYWIvKMuaQpjcwclrnYhYo8Tey+RO7sy6WJPCONnI88Jy+tVQF9QO6LrPS7BbxtOgXMeKTmZx2+gpwEPrHY6Slq1v+AzoXrpAbRQNCZo6HQIVP9MrJMGuTABb2govYgZ2NMY7igMe3VGG27cJlMJpPJZDKZTCZT6xD+Bw8TuAekC6jrAAAAAElFTkSuQmCC" />
              </defs>
            </svg>
          </a>
          <a href="">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="35" height="35" fill="url(#pattern0_142_99)" />
              <defs>
                <pattern id="pattern0_142_99" patternContentUnits="objectBoundingBox" width="1" height="1">
                  <use xlink:href="#image0_142_99" transform="scale(0.0111111)" />
                </pattern>
                <image id="image0_142_99" width="90" height="90"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACSUlEQVR4nO3csWoVQRSH8VOZEBDRNlY2CoEgdr5BuhR5BUujlfgI1tZaBcRXsEtIEU1lrER7W0US0MpPRhZuhAmZvTNzZnT+vz7sme/O3ewGMmYiIiIiIiIiImLAKvAYOAbO+H+dAe+AR8CK60cP3AQ+MJ6TsHbPnTxi5POx6+/s6XYxul2P0OGePLq3HqFPW6+yA6ceoQVQaCcK7UShnSi0E4V2otALX4E94AFwF1gH1qYnp+vADeAWsAFsAa+ZQaH5E/gJcHXmY2v4GYVO9Am4s+T7gUIn+gxcW/YrrdBpfgL3lo2s0Ome50RW6DS/gNsKXd9hbmTt6DTPFNrHduKOvQ+8mZ6zs5X4cC8buDcbCTOHN8MfJS86Yuj1hJlflb7oiKHXEmb+WPqiw4W2tJm/tbjuiKGLU+iI8pkVOkqhC4inVejiEUsBXnY1G47MEXDQ1Wz1sjZYzN/r+sIMHgO5MSfhpWf6c2s/s9XL2mAxizVtMpPHUG7MCbDT3Wx1kjZazGJNT5nJYyg35gR40d1sdZI2WsxiTfvM5DFUV6zRzAododAFxMIqdAUK7cS0oxU6C52xRjPnVVToZAodkZ5PoS8UC6vQFSi0E9OOVugsdMYazZxXUaGTKXREej6FvlAsrEJXoNBOTDtaobPQGWs0c17Ff/A4NmsT+vtwBwxam9AuBwyGU2dHD/3QI/TKdBDqqKHfA1eqhz53rHEXsS1t3pKRL/0H0ho7ezfcr1r+grS0WXOEtR2F24XbThYRERERERERsb79Bvmh4UzwAuRsAAAAAElFTkSuQmCC" />
              </defs>
            </svg>
          </a>
          <a href="">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="35" height="35" fill="url(#pattern0_142_100)" />
              <defs>
                <pattern id="pattern0_142_100" patternContentUnits="objectBoundingBox" width="1"
                  height="1">
                  <use xlink:href="#image0_142_100" transform="scale(0.0111111)" />
                </pattern>
                <image id="image0_142_100" width="90" height="90"
                  xlink:href="data:image/png;base64,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" />
              </defs>
            </svg>
          </a>
          <a href="">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="35" height="35" fill="url(#pattern0_142_101)" />
              <defs>
                <pattern id="pattern0_142_101" patternContentUnits="objectBoundingBox" width="1"
                  height="1">
                  <use xlink:href="#image0_142_101" transform="scale(0.0111111)" />
                </pattern>
                <image id="image0_142_101" width="90" height="90"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAADUElEQVR4nO3cO08UURjG8aOlFkoBCqKlH0AN1jbaKZDYGgoLE28YCwsKqcCPIGIksTJGYkG0UKMWRluovEVjB3grgHhL9G9OfDesXPccdmbO7D6/crM7855nZ2ZnZ868zomIiIiIiIiISF0AbcB+oBs4BwwDo8A48ASYAt4BM8BXYI5Fc/bajL1nyj4zbssYtmV22zraGvZrA1qAg0AfMAiMAY+A18B38ufX+cpqGLOa+qzGFpc6oAM4AlwERoCnwCzlM2u1j9hY/Jg6it7lTwG3ShpoqI92SPKHovY8At5h33YRu30qfgA3Mgsc6AE+FT3KhHwGeusd8kngd9EjS9Af4HQ9t2S/QFmZz6ZnoyHvtnNVWdsXYNdGgvbnmlKb0diQ9wC/alyJwE+gMyboC0ov2NmYoO+Hr6fpTcQE/b7pYwv3NibohYgVNbuFmKAlgoLOiYLOiYLOSZmCHijzD3FpgnaLd2xGynjFsFRBV9hN1WeUiAuVSqHAJuA48IESKG3QFcAW4BIwT8JcqFQLBTqBm6nejGiYoCuALuA5iXGhylAo/47fJ4BpEtGQQVcAW23WUeHTIFyo0hS6/B6nP34XxoUqTaErAA4Bk6Wov4giowpdvf7NdvzOdcpa0wVdAWwHrthUrvTqz6OouhRa+3j2ArfJWExhhXDZBj2RXP1ZF7SaDALWoWMldQxYP4ZrqePpnX+mJXcxxRbCbSxgP41Nf1hqERmw/oKHcmEB66JSLBd2mfQFiYnZHZMsFF34zzZodCurvtzygHVzNgvu/5APaLpBRpwm0ORmQFPCpHFO78pOQedEQSccdGnnKBdoLiZo36dIwryJCfpe4EqEuAc6zyu5YGdip1fpofusH7q3sH3vIMmyjUTVpG/f9EPW768U3xjFwu5NdXZ9w7T6qQpbzauybl61ZMv2u4hk1Y6tKux24HpeMzObssHgksB3+nNGayPZLC0z7+bWMnOdLf0w0A9ctfbCyTzAE8DX/NjG0G9jKi7YwJmcXTbzftB2uYfWWvgb+fPrfAk8sFouW22+xm2uUQGtwD7gmO2WQ8A14I5tWZVG3dPW6LD6qdl5e23a3jNpn7ljD+wP2TKP2jpaix6viIiIiIiIiIhrEH8BelVYxPQ3ygQAAAAASUVORK5CYII=" />
              </defs>
            </svg>
          </a>
          <a href="">
            <svg width="35" height="35" viewBox="0 0 35 35" fill="none"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <rect width="35" height="35" fill="url(#pattern0_142_102)" />
              <defs>
                <pattern id="pattern0_142_102" patternContentUnits="objectBoundingBox" width="1"
                  height="1">
                  <use xlink:href="#image0_142_102" transform="scale(0.0111111)" />
                </pattern>
                <image id="image0_142_102" width="90" height="90"
                  xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAACtUlEQVR4nO3cu2sUURiG8eMlRgTBS7zG2AgBsVdQK8FCrLVQxMJCBKP/gXZeQARRwVqMIGongoKtFxCMhdhpJVgEJG4U748MGWFZdmbO7mY+z5nz/iDd7sfuk+Gb3UkY50RERERERERExAFLgdPAC2CW5poFngOngGHTXz2wCXhNeqay9255JKcYuT12/Ud2vi5SN2EROtvJqXtmEbr1v99lAFoWoQVQaCMKbUShjSh04qGngbPALmArsA+4CfwiUiGGfgmsK5i1J9aPi6GF/gSsr5h3mAiFFvq8x7wFwFsiE1rovZ4zrxOZ0ELv8Jx5jsiEFvqQ58y7RCa00A885q0GPhOZ0EJnDlacCG8ToRBDf8//WLC4Y85a4A6RCjH0Px+AW8DVbKUAX4lYyKEbRaGNKPScb8B74A3wEfhNAqEvAhdKfm4UPO9RxfOudTx+BricfUkChjpe80JgM3AEeExDQy+qmLel4HknKp63oe2x2UfEkR7ew27gHQNwdQsw9Jk+38eafLUotKsOfb+fyG0zxoEvOqJLAMuAVW5AwBWFNgCMAT+1ow30829uyZwMC64C7geO5n/8XeE89XM93KUWGhgCLuVfUtpll16Pec44oNAV8shF/gA7PWZsV+gSwCjwoyLSPY85GxW6BHDcI9C0x5zlCl2iy/WOIis99nxPXN1COhkCk56vYcxjVk9X+FzdCCv0Q8/XMO4xq6f/A3R1I6zQTzxfwzaPWQpdRKF1RA9Oq2POPKRUaB8K3Z1OhuhTh3Z0Ga2O7rQ60OrQ6iij1dGdVgdaHVodsa2ORlJoIwptRKGNKLQRhW5Q6CjvrzHPZixC6waD2NxgMLvrbOpOWoQezm+EmqpXwJLaQ7fd1ngq0cijJpE7juyJbF81/ATZAp5m68LsSBYRERERERERcWH7Cy+jOyOAOZZ/AAAAAElFTkSuQmCC" />
              </defs>
            </svg>
          </a>
        </div>
      </div>
    </div>

  </div>




</body>

</html>
