package com.example.myfirstandroidapp



import android.os.Bundle
import android.widget.Toast
import androidx.appcompat.app.AppCompatActivity
import com.example.myfirstandroidapp.databinding.ActivityMainBinding
import com.example.myfirstandroidapp.http.models.DetailTeam
import com.example.myfirstandroidapp.http.models.Response
import com.example.myfirstandroidapp.http.service.TeamService
import retrofit2.Call
import retrofit2.Callback
import retrofit2.Response as RetrofitResponse

class MainActivity : AppCompatActivity() {

    private lateinit var binding: ActivityMainBinding

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        binding = ActivityMainBinding.inflate(layoutInflater)
        setContentView(binding.root)

        val teamService = TeamService.teamEndpoint
        val request: Call<Response> = teamService.getTeamDetail("rizwan")

        request.enqueue(object : Callback<Response> {
            override fun onResponse(
                call: Call<Response>,
                response: RetrofitResponse<Response>
            ) {
                if (response.isSuccessful) {
                    val teamDetail = response.body()?.detailTeam
                    teamDetail?.let {
                        val message = "Nama Tim: ${it.nama}, Profesi: ${it.profesi}"
                        binding.textViewTeamDetail.text = message // Atur teks TextView di sini
                    }
                } else {
                    val errorMessage = "Gagal mengambil data: ${response.code()}"
                    Toast.makeText(this@MainActivity, errorMessage, Toast.LENGTH_SHORT).show()
                }
            }

            override fun onFailure(call: Call<Response>, t: Throwable) {
                val errorToast = "Gagal mengambil data: ${t.message}"
                Toast.makeText(this@MainActivity, errorToast, Toast.LENGTH_SHORT).show()
            }

        })
    }
}