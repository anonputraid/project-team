import requests
from django.http import HttpResponse
from django.shortcuts import render

def index(request):
    url = "https://getbitlab.com/team?get=wadi"

    # Melakukan permintaan GET ke URL
    response = requests.get(url)

    # Memastikan respons adalah 200 OK
    if response.status_code == 200:
        try:
            # Menguraikan data JSON dari respons
            json_data = response.json()

            # Mendapatkan nilai nama dan profesi dari objek JSON
            nama = json_data["detail_team"]["nama"]
            profesi = json_data["detail_team"]["profesi"]

            # Mengembalikan nilai dalam HttpResponse dalam format JSON
            data = {
                "Nama": nama,
                "Profesi": profesi
            }

            return render(request, 'main.html', data)
        except KeyError:
            return HttpResponse("Error: JSON structure is not as expected", status=500)
    else:
        # Menangani kesalahan jika respons bukan 200 OK
        return HttpResponse("Error: Unable to fetch data from the API", status=response.status_code)
