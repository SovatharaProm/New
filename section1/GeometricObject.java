package com.haksrunlao.section1;

/**
 * @author HAKSRUN
 */
public abstract class GeometricObject {
    private double length;
    private double width;

    public GeometricObject() {
        this.length = 1.0;
        this.width = 1.0;
    }

    public GeometricObject(double length, double width) {
        this.length = length;
        this.width = width;
    }

    public abstract double getArea(double length, double width);

    public abstract double getPerimeter(double length, double width);

    public double getLength() {
        return length;
    }

    public void setLength(double length) {
        this.length = length;
    }

    public double getWidth() {
        return width;
    }

    public void setWidth(double width) {
        this.width = width;
    }
}
