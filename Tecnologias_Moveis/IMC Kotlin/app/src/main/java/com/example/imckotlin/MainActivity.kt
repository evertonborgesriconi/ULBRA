package com.example.imckotlin

import android.content.Intent
import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.CheckBox
import android.widget.CompoundButton
import android.widget.RadioGroup
import com.google.android.material.textfield.TextInputEditText

class MainActivity : AppCompatActivity() {

    var sexo = ""

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        val txt_peso = findViewById<TextInputEditText>(R.id.txt_peso)
        val txt_altura = findViewById<TextInputEditText>(R.id.txt_altura)
        val btn_calcula = findViewById<Button>(R.id.btn_calcular)
        val txt_nome = findViewById<TextInputEditText>(R.id.txt_nome)
        val check_m = findViewById<CheckBox>(R.id.check_masculino)
        val check_f = findViewById<CheckBox>(R.id.check_feminimo)



        check_m.setOnCheckedChangeListener(object: CompoundButton.OnCheckedChangeListener {
            override fun onCheckedChanged(buttonView: CompoundButton?, isChecked: Boolean) {


                if (isChecked){
                    sexo = getString(R.string.app_mas)
                    check_f.isChecked = false
                }
            }

        })

        check_f.setOnCheckedChangeListener(object: CompoundButton.OnCheckedChangeListener {
            override fun onCheckedChanged(buttonView: CompoundButton?, isChecked: Boolean) {


                if (isChecked){
                    sexo = getString(R.string.app_fen)
                    check_m.isChecked = false
                }
            }

        })


        btn_calcula.setOnClickListener {
            if (txt_peso.text.toString() != "" && txt_altura.text.toString() != "") {

                val imc = calculaIMC(txt_peso.text.toString(), txt_altura.text.toString())

                val nome = txt_nome.text.toString()

                val intent = Intent(this@MainActivity, ResultActivity::class.java)

                intent.putExtra("sexo", sexo)
                intent.putExtra("nome", nome)
                intent.putExtra("resultado", imc)

                startActivity(intent)


            }

        };



    }

    private fun calculaIMC(peso: String, altura: String): Double = peso.toDouble() / (altura.toDouble() * altura.toDouble())













}

