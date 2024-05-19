package com.example.myfirstandroidapp.http.endpoint

import com.example.myfirstandroidapp.http.models.Response
import retrofit2.Call
import retrofit2.http.GET
import retrofit2.http.Query

interface TeamEndpoint {
    @GET("team")
    fun getTeamDetail(@Query("get") teamId: String): Call<Response>
}