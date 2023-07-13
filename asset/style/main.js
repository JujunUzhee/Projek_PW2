let prevScrollPos = window.scrollY;
window.onscroll = function () {
  let currentScrollPos = window.scrollY;
  if (prevScrollPos > currentScrollPos) {
    document.getElementById("navbar").classList.remove("hidden"); // Menampilkan navbar saat scroll ke atas
  } else {
    document.getElementById("navbar").classList.add("hidden"); // Menyembunyikan navbar saat scroll ke bawah
  }
  prevScrollPos = currentScrollPos;
};

const jumlahInput = document.getElementById("form-jumlah");
const hargaInput = document.getElementById("total-harga");
const totalInput = document.getElementById("form-total");

// Fungsi untuk menghitung total berdasarkan jumlah dan harga
function hitungTotal() {
  const jumlah = parseInt(jumlahInput.value);
  const harga = parseInt(hargaInput.value);

  if (!isNaN(jumlah) && !isNaN(harga)) {
    const total = jumlah * harga;
    totalInput.value = total;
  } else {
    totalInput.value = ""; // Menghapus nilai jika jumlah atau harga bukan angka
  }
}

// Event listener saat nilai jumlah berubah
jumlahInput.addEventListener("input", hitungTotal);

// Panggil fungsi hitungTotal saat halaman dimuat
hitungTotal();
