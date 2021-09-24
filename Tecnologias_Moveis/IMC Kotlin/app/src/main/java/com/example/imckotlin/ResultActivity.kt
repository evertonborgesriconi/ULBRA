package com.example.imckotlin

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.TextView
import java.text.DecimalFormat

class ResultActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_result)

        val intent = intent

        val resultado = intent.getDoubleExtra("resultado", 0.0)
        val nome = intent.getStringExtra("nome")
        val sexo = intent.getStringExtra("sexo")

        val formataValor = DecimalFormat("#.00")

        val imcResult = checkIMC(resultado, sexo.toString())

        val imcResp = "IMC:${formataValor.format(resultado)} $imcResult"

        val txt_resultado = findViewById<TextView>(R.id.text_Resultado)
        val txt_nome = findViewById<TextView>(R.id.texto_nome)
        val txt_sexo = findViewById<TextView>(R.id.texto_sexo)

        txt_resultado.text = imcResp
        txt_nome.text = nome
        txt_sexo.text = sexo


    }

    private fun checkIMC(db: Double, sexo: String): String {
        if (sexo == getString(R.string.app_mas)) {
            return when (db) {
                in 0.0..20.79 -> getString(R.string.app_text1)
                in 20.79..26.49 -> getString(R.string.app_text2)
                in 26.49..27.89 -> getString(R.string.app_text3)
                in 27.89..31.19 -> getString(R.string.app_text4)
                in 31.19..34.99 -> getString(R.string.app_text5)
                in 35.09..39.99 -> getString(R.string.app_text6)
                else -> getString(R.string.app_text7)
            }
        } else {
            return when (db) {
                in 0.09..19.19 -> getString(R.string.app_text1)
                in 19.19..25.89 -> getString(R.string.app_text2)
                in 25.89..27.39 -> getString(R.string.app_text3)
                in 27.89..32.39 -> getString(R.string.app_text4)
                in 32.39..34.99 -> getString(R.string.app_text5)
                in 35.09..39.99 -> getString(R.string.app_text6)
                else -> getString(R.string.app_text7)
            }

        }
    }
}