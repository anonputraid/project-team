package com.example.myfirstandroidapp.http.service

import retrofit2.Retrofit
import retrofit2.converter.gson.GsonConverterFactory
import com.example.myfirstandroidapp.http.endpoint.TeamEndpoint

object TeamService {
    // Buat instance Retrofit
    private val retrofit: Retrofit = Retrofit.Builder()
        .baseUrl("https://getbitlab.com/") // Sesuaikan dengan baseUrl yang sesuai
        .addConverterFactory(GsonConverterFactory.create())
        .build()

    // Mendapatkan instance dari TeamEndpoint
    val teamEndpoint: TeamEndpoint = retrofit.create(TeamEndpoint::class.java)
}