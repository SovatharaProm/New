package com.haksrunlao.section1;

/**
 * @author HAKSRUN
 */
public class Rectangle extends GeometricObject {
    public Rectangle() {
    }

    public Rectangle(double length, double width) {
        super(length, width);
    }

    @Override
    public double getArea(double length, double width) {
        return length * width;
    }

    @Override
    public double getPerimeter(double length, double width) {
        return (length + width) * 2;
    }

    @Override
    public String toString() {
        String description = "This Rectangle has length : " + getLength() +
                " width: " + getWidth() +
                "\nThe area is: " + getArea(getLength(), getWidth()) +
                "\nThe perimeter is: " + getPerimeter(getLength(), getWidth());
        return description;
    }
}
