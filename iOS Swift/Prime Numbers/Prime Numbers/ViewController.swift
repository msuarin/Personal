//
//  ViewController.swift
//  Prime Numbers
//
//  Created by Mark Suarin on 8/11/15.
//  Copyright © 2015 MarkSuarin. All rights reserved.
//

import UIKit

class ViewController: UIViewController {
    
    
    @IBOutlet var entry: UITextField!
    @IBOutlet var result: UILabel!
    
    @IBAction func check(sender: AnyObject) {
        
        if let x = Int(entry.text!)
        {
            
            var i = 2
            var isPrime = true
            
            if (x == 1)
            {
                isPrime = false
            }
            else
            {
                while (isPrime && i <= (x / 2) && x != 2)
                {
                    let rem = x % i
                    if (rem == 0)
                    {
                        isPrime = false
                    }
                    else
                    {
                        i++
                    }
                }
            }
            
            if(isPrime)
            {
                result.text = "\(x) is a prime number"
            }
            else
            {
                result.text = "\(x) is not a prime number"
            }

            
        }
        else
        {
            result.text = "Please enter a whole number."
        }
    }
    
    

    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }


}

