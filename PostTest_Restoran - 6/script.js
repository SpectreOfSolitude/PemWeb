function Simpan() {
    let makanan = document.getElementById("namaMakanan");
    let nama = makanan.options[makanan.selectedIndex].text;
    let jumlah = document.getElementById("Jumlah").value;
    let kode = document.getElementById("Voucher").value;
    console.log(kode)
    let harga = makanan.value * jumlah;
    let hargaAkhir = harga
    let diskon = "0%"
    if (kode == "SOS") {
        hargaAkhir = harga * 0.7
        diskon = "30%"
    }

    console.log(jumlah)

    document.getElementById("NamaPesanan").textContent = nama
    document.getElementById("JumlahPesanan").innerText = jumlah;
    document.getElementById("TotalDiskon").textContent = diskon;
    document.getElementById("TotalHarga").textContent = hargaAkhir;


    event.preventDefault();
}
