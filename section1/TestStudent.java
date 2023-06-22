package com.haksrunlao.section1;

/**
 * @author HAKSRUN
 */
public class TestStudent {
    public static void main(String[] args) {
        GradStudent gradStudent = new GradStudent();
        UnGradStudent unGradStudent = new UnGradStudent();
        System.out.println("GradStudent: " + gradStudent.takeExam());
        System.out.println("UnGradStudent: " + unGradStudent.takeExam());
    }
}
