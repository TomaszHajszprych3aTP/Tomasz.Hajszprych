### Czym się różni SHA256 od SHA512?
SHA256 i SHA512 to algorytmy kryptograficznego haszowania z rodziny SHA-2. Główne różnice to:
- **Długość wyjściowego hasza:** SHA256 generuje hasz o długości 256 bitów, podczas gdy SHA512 generuje hasz o długości 512 bitów.
- **Szybkość:** SHA256 jest zazwyczaj szybszy na urządzeniach z mniejszymi zasobami (np. starsze procesory 32-bitowe), natomiast SHA512 może być bardziej wydajny na nowoczesnych procesorach 64-bitowych dzięki ich architekturze.
- **Odporność na kolizje:** SHA512 oferuje większą odporność na kolizje i ataki brute force, ponieważ wymaga większej liczby operacji, aby odgadnąć wartość hasza.

### Za co odpowiada długość klucza w algorytmach?
Długość klucza w algorytmach kryptograficznych wpływa na:
- **Bezpieczeństwo:** Dłuższy klucz zwiększa liczbę możliwych kombinacji, co czyni algorytm bardziej odpornym na ataki brute force.
- **Wydajność:** Dłuższe klucze mogą zwiększyć czas potrzebny na szyfrowanie i deszyfrowanie, zwłaszcza na słabszych urządzeniach.

### Jaki klucz wybierzemy do zapisania hasła?
Do haszowania haseł zaleca się użycie algorytmów takich jak **bcrypt**, **Argon2** lub **PBKDF2** zamiast SHA256 czy SHA512. Te algorytmy zostały zaprojektowane tak, aby były odporne na ataki brute force i pozwalały na dostosowanie kosztu obliczeniowego.

### Jeśli chcecie użyć różnych kluczy, to jakich i dlaczego?
- **Do szyfrowania danych:** Możemy użyć AES (np. AES-256), ponieważ jest szybki, bezpieczny i powszechnie stosowany.
- **Do haszowania haseł:** Jak wspomniano wcześniej, rekomendujemy bcrypt, Argon2 lub PBKDF2.
- **Do podpisów cyfrowych:** Używamy algorytmów takich jak RSA (2048+ bitów) lub ECDSA z krzywymi eliptycznymi, np. secp256r1, aby zapewnić bezpieczeństwo przy mniejszych kluczach.

### Po co szyfrować dane kluczem, który daje się złamać?
Niektóre klucze (lub algorytmy) mogą być stosowane pomimo niższego poziomu bezpieczeństwa, jeśli:
- **Czas ochrony danych jest krótki:** Jeśli dane są ważne tylko przez krótki okres, prostsze algorytmy mogą wystarczyć.
- **Szyfrowanie jest używane jako warstwa dodatkowa:** W połączeniu z innymi środkami bezpieczeństwa (np. TLS).
- **Zasoby są ograniczone:** Na urządzeniach o niskiej mocy obliczeniowej, gdzie dłuższe klucze lub bardziej złożone algorytmy są zbyt kosztowne.

W idealnym przypadku należy jednak zawsze wybierać algorytmy i klucze odpowiednie do poziomu wymaganego bezpieczeństwa oraz aktualnych standardów.
