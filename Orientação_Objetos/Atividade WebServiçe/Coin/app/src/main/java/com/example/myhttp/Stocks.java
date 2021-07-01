package com.example.myhttp;

import java.io.Serializable;

public class Stocks implements Serializable {
    private String sName;
    private String sLocation;
    private Double sPoint;
    private Double sVariation;

    public Stocks(String sName, String sLocation, Double sPoint, Double sVariation) {
        this.sName = sName;
        this.sLocation = sLocation;
        this.sPoint = sPoint;
        this.sVariation = sVariation;
    }

    public String getsName() {
        return sName;
    }

    public String getLocation() {
        return sLocation;
    }

    public String getPoint() { return "Pontos: "+ sPoint.toString();
    }

    public String getVariation() {
        return "Variation"+ sVariation.toString();
    }
}
