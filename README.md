# Mengenal SQL Injection : Cara Kerja, Dampak, dan Cara Pencegahannya #
Apa itu Sql Injection?
#
SQL Injection adalah kerentanan paca web yang memungkinkan peretas untuk mengganggu 
query database dalam sistem. Serangan ini biasanya digunakan untuk mengambil isi dari 
database sistem. Dalam beberapa kasus, penyerang dapat mengubah atau menghapus data ini, 
yang dapat menyebabkan perubahan pada konten atau perilaku aplikasi. Dalam kasus lain juga, 
peretas dapat melakukan serangan SQL Injection untuk mengkompromikan server utamanya 
atau infrastruktur back-end lainnya, atau melakukan serangan denial of service.

# Eksperimen sederhana Sql Inejction #

Dalam kasus ini saya mengambil contoh metode Blind Sql Ijection
1. Membuat contoh website from login sederhana 
  !<img width="515" height="499" alt="Screenshot 2025-05-03 133408" src="https://github.com/user-attachments/assets/26f098ec-11ed-4515-968f-6922f05e5fc5" />
2. Tampilan merupakan Struktur databasenya
  !<img width="1920" height="1200" alt="Screenshot 2025-05-03 132802" src="https://github.com/user-attachments/assets/69ed2668-0483-4ac0-aa8e-850bdd0b36db" />
3. Coba login dengan username dan password yang salah maka dashbord nya akan menampilkan output seperti ini
  !<img width="515" height="499" alt="Screenshot 2025-05-03 133408" src="https://github.com/user-attachments/assets/42638dd5-ce05-43bc-91c7-c5d49110f408" />
  !<img width="526" height="269" alt="Screenshot 2025-05-03 134640" src="https://github.com/user-attachments/assets/175fd0f5-5a96-4e88-aea6-49d784425588" />
4. Coba login biasa dan masukan username dan password nya yang sesuai dengan yang ada di database maka tampilan dashbord nya akan seperti ini 
  !<img width="515" height="499" alt="Screenshot 2025-05-03 133408" src="https://github.com/user-attachments/assets/48149b65-5d00-419d-9bd4-50fee742361d" />
  !<img width="1011" height="340" alt="Screenshot 2025-05-03 133618" src="https://github.com/user-attachments/assets/d8479596-2923-4eda-8bee-bcaa786ae9e9" />
Dalam kasus ini kita bisa login kehalaman admin dengan memasukan username dan password yang benar, untuk mencoba metode blind sql injection caranya seperti ini:
1. Ketikan perintah ‘or’1’=’1 pada username dan password login




