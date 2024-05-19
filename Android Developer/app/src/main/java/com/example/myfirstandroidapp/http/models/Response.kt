package com.example.myfirstandroidapp.http.models

import com.google.gson.annotations.SerializedName

data class Response(

	@field:SerializedName("detail_team")
	val detailTeam: DetailTeam? = null
)

data class DetailTeam(

	@field:SerializedName("nama")
	val nama: String? = null,

	@field:SerializedName("profesi")
	val profesi: String? = null
)
