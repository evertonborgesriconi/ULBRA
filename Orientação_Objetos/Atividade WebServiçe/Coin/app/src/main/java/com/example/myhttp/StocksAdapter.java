package com.example.myhttp;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;

import java.util.List;

public class StocksAdapter extends ArrayAdapter<Stocks> {

    public StocksAdapter(@NonNull Context context, @NonNull List<Stocks> objects) {
        super(context, 0, objects);
    }

    @NonNull
    @Override
    public View getView(int position, @Nullable View convertView, @NonNull ViewGroup parent) {
        Stocks marca= getItem(position);
        View listaStocks=convertView;
        if(convertView==null){
            listaStocks= LayoutInflater.from(getContext()).inflate(R.layout.stocks_item,null);
        }
        TextView nome =listaStocks.findViewById(R.id.txtMarca);
        TextView txtCidade = listaStocks.findViewById(R.id.txtCidade);
        TextView txtPoints = listaStocks.findViewById(R.id.txtPoints);
        TextView txtVarietion = listaStocks.findViewById(R.id.txtVariation);
        



        resolveDescricaoNome(marca, nome);
        resolveDescricaoCidade(marca,txtCidade);
        resolveDescricaoPoints(marca,txtPoints);
        resolveDescricaoVarietion(marca,txtVarietion);


        return listaStocks;
    }

    private void resolveDescricaoNome(Stocks marca, TextView tv){
        String descricaoNome = "Nome nao informado";
        if (marca != null && marca.getsName() != null) {
            descricaoNome = marca.getsName();
        }
        tv.setText(descricaoNome);
    }

    private void resolveDescricaoCidade(Stocks marca, TextView tv){
        String cidadeNome = "Cidade nao informada";
        if (marca != null && marca.getLocation() != null) {
            cidadeNome = marca.getLocation();
        }
        tv.setText(cidadeNome);
    }

    private void resolveDescricaoPoints(Stocks marca, TextView tv){
        String pontos = "points nao informado";
        if (marca != null && marca.getPoint() != null) {
           pontos = marca.getPoint();
       }
       tv.setText(pontos);
    }
    private void resolveDescricaoVarietion(Stocks marca, TextView tv){
        String variacao = "Variaçao nao informado";
        if (marca != null && marca.getVariation() != null) {
            variacao = marca.getVariation();
        }

        tv.setText(variacao);
    }


}
