function emailGecerliMi(email) {
    const emailKurali = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailKurali.test(email);
}

function telefonGecerliMi(telefon) {
    const telefonKurali = /^[0-9]+$/;
    return telefonKurali.test(telefon);
}

function jsKontrolEt() {
    const ad = document.getElementById("ad").value.trim();
    const soyad = document.getElementById("soyad").value.trim();
    const email = document.getElementById("email").value.trim();
    const telefon = document.getElementById("telefon").value.trim();
    const cinsiyet = document.querySelector('input[name="cinsiyet"]:checked');
    const konu = document.getElementById("konu").value;
    const mesaj = document.getElementById("mesaj").value.trim();
    const onay = document.getElementById("onay").checked;

    if (ad === "" || soyad === "" || email === "" || telefon === "" || cinsiyet === null || konu === "" || mesaj === "" || onay === false) {
        alert("JavaScript kontrolü: Lütfen tüm alanları doldurunuz.");
        return;
    }

    if (!emailGecerliMi(email)) {
        alert("JavaScript kontrolü: Lütfen geçerli bir e-posta adresi giriniz.");
        return;
    }

    if (!telefonGecerliMi(telefon)) {
        alert("JavaScript kontrolü: Telefon alanına sadece rakam giriniz.");
        return;
    }

    alert("JavaScript kontrolü başarılı. Form gönderiliyor.");
    document.getElementById("iletisimFormu").submit();
}

if (document.getElementById("iletisimUygulamasi")) {
    const { createApp } = Vue;

    createApp({
        data() {
            return {
                form: {
                    ad: "",
                    soyad: "",
                    email: "",
                    telefon: "",
                    cinsiyet: "",
                    konu: "",
                    mesaj: "",
                    onay: false
                }
            };
        },

        methods: {
            vueKontrolEt() {
                if (
                    this.form.ad.trim() === "" ||
                    this.form.soyad.trim() === "" ||
                    this.form.email.trim() === "" ||
                    this.form.telefon.trim() === "" ||
                    this.form.cinsiyet === "" ||
                    this.form.konu === "" ||
                    this.form.mesaj.trim() === "" ||
                    this.form.onay === false
                ) {
                    alert("Vue.js kontrolü: Lütfen tüm alanları doldurunuz.");
                    return;
                }

                if (!emailGecerliMi(this.form.email)) {
                    alert("Vue.js kontrolü: Lütfen geçerli bir e-posta adresi giriniz.");
                    return;
                }

                if (!telefonGecerliMi(this.form.telefon)) {
                    alert("Vue.js kontrolü: Telefon alanına sadece rakam giriniz.");
                    return;
                }

                alert("Vue.js kontrolü başarılı. Form gönderiliyor.");
                document.getElementById("iletisimFormu").submit();
            }
        }
    }).mount("#iletisimUygulamasi");
}

function loginKontrol() {
    const email = document.getElementById("email").value.trim();
    const sifre = document.getElementById("sifre").value.trim();

    if (email === "" || sifre === "") {
        alert("Kullanıcı adı ve şifre boş bırakılamaz.");
        return false;
    }

    const emailKurali = /^[a-zA-Z0-9._%+-]+@sakarya\.edu\.tr$/;

    if (!emailKurali.test(email)) {
        alert("Geçerli bir sakarya.edu.tr mail adresi giriniz.");
        return false;
    }
    return true; 
}

function sarkiGetir(aranan) {
    const alan = document.getElementById("sarkiAlani");

    if (!alan) {
        return;
    }

    alan.innerHTML = "<p>Şarkılar yükleniyor...</p>";

    fetch(`https://itunes.apple.com/search?term=${aranan}&entity=song&limit=10`)
        .then(response => response.json())
        .then(data => {
            alan.innerHTML = "";

            const gorulenSarkilar = new Set();
            const benzersizSarkilar = [];

            data.results.forEach(sarki => {
                if (!gorulenSarkilar.has(sarki.trackName)) {
                    gorulenSarkilar.add(sarki.trackName);
                    benzersizSarkilar.push(sarki);
                }
            });

            benzersizSarkilar.slice(0, 3).forEach(sarki => {
                alan.innerHTML += `
                    <article class="col-md-4 mb-4">
                        <div class="card h-100">
                            <img src="${sarki.artworkUrl100}" class="card-img-top" alt="${sarki.trackName}">
                            <div class="card-body text-center">
                                <h3 class="h6">${sarki.trackName}</h3>
                                <p>${sarki.artistName}</p>
                                <a href="${sarki.trackViewUrl}" target="_blank" class="btn btn-primary">
                                    Dinle
                                </a>
                            </div>
                        </div>
                    </article>
                `;
            });
        })
        .catch(() => {
            alan.innerHTML = "<p>Veriler alınırken bir hata oluştu.</p>";
        });
}