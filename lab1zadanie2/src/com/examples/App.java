package com.examples;

import java.util.Arrays;
import java.util.Comparator;
import java.util.Random;

public class App extends Thread {
    public static void main(String[] args) {
        runSortTester();
    }

    public static void runSortTester() {
        int aL;
        Random rand = new Random(System.currentTimeMillis());
        aL = rand.nextInt(1000000);
        System.out.println("Number of elements: " + aL);
        Integer[] numbers = createRandomArray(aL);
        Comparator<Integer> comp = new Comparator<Integer>() {
            public int compare(Integer d1, Integer d2) {
                return d1.compareTo(d2);
            }
        };
        System.out.println("Before sorted: ");
        System.out.println(Arrays.toString(numbers));
        MergeSorter.sort(numbers, comp, 2);
        System.out.println("Sorted: ");
        System.out.println(Arrays.toString(numbers));
    }

    public static Integer[] createRandomArray(int length) {
        Integer[] a = new Integer[length];
        Random rand = new Random(System.currentTimeMillis());
        for (int i = 0; i < a.length; i++) {
            a[i] = rand.nextInt(1000000);
        }
        return a;
    }
}
