

   
    <!-- this hidden value carry the map subject from controller use it in javascript api call-->
    
    <input type="hidden" id="base_url" value=<?php echo Config::get('URL'); ?>></input>
    
    

            
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
                    
			
                   
                    
                    
                    
                    
                    
                        
                        <div class="row">
                                <div id="breadcrumb" class="col-md-12">
                                        <ol class="breadcrumb">
                                                <li><a href="<?php echo Config::get('URL'); ?>map/mapboxgl/">Transparent Gov</a></li>
                                                <li><a href="<?php echo Config::get('URL'); ?>home/mapboxgl/<?php echo $data['area'] ?>"><?php echo $data['area'] ?>  </a></li>
                                               
                                        </ol>
                                </div>
                        </div>
                        
              
                    
                    <div class="row">
                         <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>New York City - Department of City Planning</span>
                                                            </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                         <button type="button" class="btn btn-success" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifycheckboxbuttonmap/New_York/Zone_Districts'">New York Zone Districts - check box </button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifyradiobuttonmap/New_York/Zone_Districts'">New York Zone Districts - radio </button>
                                                        
                                                            &nbsp;&nbsp;
                                                        
                                                            
                                                            
                                                             <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifycheckboxbuttonmap/New_York/Commercial_Zone'">New York Commercial Zone - check box </button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                        <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifyradiobuttonmap/New_York/Commercial_Zone'">New York Commercial Zone - radio </button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                            
                                                            
                                                        <br>
                                                        
                                                            <button type="button" class="btn btn-danger" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifycheckboxbuttonmap/New_York_Manhattan/Zoning'">Manhattan Zoning - check box </button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                            
                                                             <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifyradiobuttonmap/New_York_Manhattan/Zoning'">Manhattan Zoning - radio </button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                            
                                                       
                                                            <button disabled="disabled" type="button" class="btn btn-default"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifycheckboxbuttonmap/New_York_Bronx/Zoning'">Bronx Zoning </button>
                                                            
                                                            &nbsp;&nbsp;
                                                            
                                                            <button disabled="disabled" type="button" class="btn btn-default"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifyradiobuttonmap/New_York_Brooklyn/Zoning'">Brooklyn Zoning  </button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                            <button disabled="disabled" type="button" class="btn btn-default" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifyradiobuttonmap/New_York_Queens/Zoning'">Queens Zoning  </button>
                                                       
                                                            &nbsp;&nbsp;
                                                            <button disabled="disabled" type="button" class="btn btn-default" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/classifycheckboxbuttonmap/New_York_Staten_Island/Zoning'">Staten Island Zoning </button>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                     </div>
                    
                   
                    
                    
                    
                        <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>New York City Zoning Code</span>
                                                            </div>
                                                        
                                                        
                                                        
                                                    </div>
                                                    <div class="box-content">
                                                        
                                                         <a class="fancybox"  title="Residence districts are the most common zoning districts in New York City, accounting for about 75 percent of the city’s zoned land area. These districts accommodate an extraordinary variety of residential building forms - ranging from the single-family homes set amid wide lawns on the city’s outskirts to the soaring towers of Manhattan.

To regulate such diversity, the Zoning Resolution designates 10 basic residence districts - R1 through R10. The numbers refer to permitted bulk and density (with R1 having the lowest density and R10 the highest) and other controls such as required parking. A second letter or number in some districts signifies additional controls. Unless otherwise stated, the regulations for each district apply to all subcategories within that district. regulations for the R4 district, for example, encompass R4-1, R4A and R4B districts, except where specific differences are noted.">
					                       Residence Districts
				                        </a>
                                                        
                                                        
                                                        
                                                          
                                                 <div class="well">    
                                                        <a class="fancybox"  title="R1 districts are leafy, low density neighborhoods of large, single-family detached homes. Although new homes in R1-1 districts must be on larger and wider lots that homes in R1-2 districts, yard requirements and the same Open Space Ratio (OSR) preserve the open space that characterizes both districts. The Floor Air Ration (FAR) of 0.5, together with the sizeable required lot area tends to produce large, roomy houses. 

The maximum height of buildings in R1 districts is not fixed but is governed by sky exposure planes. Auto ownership rates in R1 districts are typically high and, like other lower-density districts, which are often distant from mass transit lines, one off-street parking space is required for each unit. The lot width in an R1-1 district is 100 feet. The lot width in an R1-2 district is 60 feet.">
					                        R1-1 & R1-2
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="Residential development in R2 districts is limited exclusively to single-family, detached houses. The lot area and lot width requirements in R2 districts allow for higher density than in R1 districts, although the maximum Floor Air Ratio (FAR) of 0.5 is the same. The minimum lot width is 40 feet, compared to 60 and 100 feet in R1 districts. The maximum height of buildings is not fixed, but is governed by a sky exposure plane. As in other low-density residence districts, one off-street parking space is required for each dwelling.">
					                       R2
				                        </a>
                                                        
                                                         &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R2A districts, established in 2005, are intended to preserve the low-rise context of neighborhoods characterized by modest, single-family detached homes on lots with a minimum width of 40 feet. The Floor Area Ratio (FAR) of 0.5 in R2A districts includes all space within a building, including attic space, resulting in smaller homes than found in other districts with similar floor area ratios. Only garages are exempt from floor area calculations, up to a maximum of 300 square feet. 

Lot coverage of the house and any external garage is limited to 30% of the zoning lot. As in R2 districts, the width of the two required side yards must total a minimum of 13 feet, each at least five feet wide, and the front yard must be at least 15 feet deep. Unlike other R2 districts, however, it must be at least as deep as an adjacent front yard, up to a depth of 20 feet. The maximum building height is fixed at 35 feet and the perimeter wall may rise no higher than 21 feet. One off-street parking space is required for each dwelling unit.">
					                       R2A
				                        </a>
                                                         &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R2X districts allow large single-family detached houses on lots with a minimum width of 30 feet. The higher Floor Area Ratio (FAR) and permitted rear yard encroachment in R2X districts produce buildings with greater bulk than in any other single-family residence district. The 0.85 FAR is considerably higher than in other R2 districts and may be increased to 1.02 by an attic allowance for the inclusion of space beneath a pitched roof. 

The perimeter wall may rise to 21 feet before sloping or being set back to a maximum building height of 35 feet. Although other residence districts require a 30-foot rear yard, houses in R2X districts may extend 10 feet into the rear yard. The amount of required open space on a lot is governed by yard requirements. As in other lower density districts, the R2X district requires one off-street parking space for each dwelling unit">
					                       R2X
				                        </a>
                                                         &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R3-1 districts are the lowest density districts that allow semi-detached one- and two-family residences, as well as detached homes. R3-1 districts generally follow existing patterns of development. For both detached and semi-detached houses, the maximum lot coverage is 35% and the 0.5 FAR (Floor Area Ratio) may be increased by an attic allowance of up to 20% for the inclusion of a space beneath a pitched roof. The perimeter wall may rise to 21 feet before sloping or being set back to a maximum building height of 35 feet. 

Front yards must be at least 15 feet deep. Two side yards with a total minimum width of 13 feet are required for a detached residence; one eight-foot side yard is required for each semi-detached residence. Parking on lots less than 35 feet wide, generally occupied by semi-detached homes, must be located in the eight foot side lot ribbon. On lots 35 feet or wider, an in-house garage is permitted as long as the driveway is at least 18 feet deep. One off-street parking space is required for each dwelling unit.">
					                       R3-1
				                        </a>
                                                        
                                                         &nbsp;&nbsp;
                                                          <a class="fancybox"  title="R3-2 districts are general residence districts that allow a variety of housing types, including low-rise attached houses, small multi-family apartment houses, and detached and semi-detached one- and two-family residences. It is the lowest density zoning district in which multiple dwellings are permitted. 

The 0.5 FAR (Floor Area Ratio), which is the same for all R3 districts, may be increased by an attic allowance of up to 20% for the inclusion of a space beneath a pitched roof. The perimeter wall of residences of all types may rise to 21feet before sloping or being set back to a maximum building height of 35 feet. Lots with detached homes must be at least 40 feet wide; if occupied by semi-detached and attached buildings, the lots must be at least 18 feet wide. The maximum lot coverage of any residence is 35% and the maximum street wall length of a building on a single zoning lot is 125 feet. Front yards must be at least 15 feet deep. One off-street parking space is required for each dwelling unit.">
					                       R3-2
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="Characteristic of many of the city's older neighborhoods, R3A zoning districts feature modest single- and two-family detached residences on zoning lots as narrow as 25 feet in width. 

The amount of required open space on residential lots in R3A districts is governed by yard requirements. New detached homes must have two side yards totaling at least eight feet, but there is no minimum width requirement for either one. (R3A districts also permit zero lot line buildings which are set alone a side lot line and have only one side yard at least eight feet wide. 

The front yard of a new home must be at least 10 feet deep and, to promote a unified streetscape, it must be as deep as an adjacent front yard, up to a depth of 20 feet. The maximum Floor Area Ratio (FAR) of 0.5 may be increased up to 20% by an attic allowance for the inclusion of a space beneath a pitched roof. The perimeter wall may rise to 21 feet before sloping or being set back to a maximum building height of 35 feet. Most cars in R3A districts are parked in an eight-foot-wide driveway along a side lot ribbon. If the lot is 35 feet or wider, a garage is permitted within the house provided the driveway is at least 18 feet deep.">
					                       R3A
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R3X districts, mapped extensively, in low-density neighborhoods, permit one- and two-family detached homes on lots that must be at least 35 feet wide. The 0.5 Floor Area Ratio (FAR) in R3X districts may be increased up to 20% by an attic allowance for the inclusion of a space beneath a pitched roof. The perimeter wall may rise to 21 feet before sloping or being set back to a maximum building height of 35 feet. 

The required amount of open space on a lot is governed by yard requirements. Two side yards that total at least 10 feet are required and there must be a minimum distance of eight feet between houses on adjacent lots. The front yard of a new home must be at least 10 feet deep and, to promote a unified streetscape, it must be at least as deep as an adjacent front yard, up to a depth of 20 feet. One off-street parking space is required for each dwelling unit. A garage is permitted within the building provided the driveway is at least 18 feet deep.">
					                       R3X
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R4 districts allow all types of housing at a slightly higher density than permitted in R3-2 districts. The Floor Are Ratio (FAR) of 0.75, plus an attic allowance of up to 20% for inclusion of a space under the pitched roof common to these districts, usually produces buildings with three stories instead of the two stories characteristic of R3 districts. To accommodate a potential third floor beneath a pitched roof, the perimeter wall in R4 districts may rise to 25 feet before being set back to the maximum building height of 35 feet. 

Front yards must be 10 deep or, if deeper, a minimum of 18 feet to provide sufficient space for on-site parking and prevent parked cards from protruding on to the sidewalk. Detached houses must have two side yards that total at least 13 feet and each one must be at least five feet wide. Semi-detached buildings need one side yard with a minimum width of eight feet. The maximum street wall length for a building on a single zoning lot is 185 feet. One off-street parking space is required for each dwelling unit.">
					                       R4
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                         <a class="fancybox"  title="On a block entirely within an R4 or R5 district (without a suffix), optional regulations may be used to develop infill housing in predominantly built-up areas. Infill regulations may be used if at least 50% of the area of the block is occupied by zoning lots developed with buildings, and the lot does not exceed 1.5 acres. However, infill regulations may not be used to redevelop a lot occupied by one- or two-family detached or semi-detached houses unless the blockfront is predominantly developed with attached or multi-family housing. 

On sites that qualify for infill regulations, the higher Floor Area Ratio (FAR) of 1.35 and lot coverage of 55% for R4 Infill housing, as well as more relaxed parking requirements, permit developments with greater bulk and more dwelling units than are otherwise permitted in R4 districts. Infill regulations typically produce three-story buildings with three dwelling units and two parking spaces-one in a ground-floor garage and the other in the driveway. Infill regulations may also produce small apartment buildings. 

Height and setback regulations for R4 Infill housing are the same as for R4 districts. Front yards must be at least 18 feet deep to prevent cars parked in the front driveway from jutting onto the sidewalk. The maximum street wall length for a building on a single zoning lot is 185 feet. Off-street parking is required for two-thirds of the dwelling units.">
					                       R4 Infill
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R4-1 districts permit only one- and two-family detached and semi-detached residences. Despite a narrower lot requirement of 25 feet for detached homes, houses on R4-1 districts tend to be larger than those in R3-1 districts because of the higher floor area ratio of 0.75 plus an attic allowance. The perimeter wall may rise to 25 feet, compared to 21 feet in R3-1 districts, before sloping on being set back to a maximum building height of 35 feet. 

The amount of required open space on R4-1 zoning lots is governed by yard requirements. Two side yards that total eight feet must be provided for a detached residence. Although there is no minimum width for each side yard, there must always be eight feet between buildings on adjacent zoning lots. One four-foot side yard is required for each semi-detached residence, which must be on a lot at least 18 feet wide. 

Zero lot lined residences are permitted in R4-1 districts, and require only one eight-foot side yard. Front yards must be at least 10 feet deep and at least as deep as an adjacent front yard, up to a depth of 20 feet. One off-street parking space is required for each dwelling unit. On lots less than 35 feet wide parking must be located in a driveway along a side lot ribbon.">
					                       R4-1
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R4A districts permit only one- and two-family detached residences. Differences in the permitted floor area ratio and minimum required lot size, however, result in differences in the typical buildings found in each district. Characterized by houses with two stories and an attic beneath a pitched roof, R4A districts have a FAR of up to 0.75 (plus an attic allowance) and a minimum lot width of 30 feet. The districts are usually mapped in older neighborhoods. 

As in R3A and R3X districts, the perimeter wall of a house may ride to 21 feet before sloping or being set back to the maximum building height of 35 feet. The amount of required open space in R4A districts is governed by yard requirements: a front yard at least 10 feet deep and at least as deep as an adjacent front yard up to a depth of 20 feet; a 30-foot-deep rear yard; and two side yards that total at least 10 feet and a minimum width of at least two feet each. 

One off-street parking space is required for each dwelling unit. Parking must be located in a driveway along a side lot ribbon if the lot is less than 35 feet wide. If the lot if 35 feet or wider, a garage is permitted within the house, provided the driveway is at least 18 feet deep.">
					                       R4A
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="Primarily a low-rise row house district limited to one- and two-family residences, R4B districts also permit detached buildings.However, the floor area ratio of 0.9 and building height limit of 24 feet typically produce a two-story, flat-roofed row house. 

To maintain the characteristic row house streetscape of R4B districts, the front yard of a new house must be at least five feet deep as at least as deep as one adjacent front yard, but no deeper than the other, to a maximum depth of 20 feet. Detached houses must have two side yards totaling at least eight feet; there is no minimum width for a side yard but there must be at least eight feet between buildings on adjacent zoning lots. 

Zero lot line buildings require only one eight-foot side yard and semi-detached buildings require one at least four feet wide. One off-street parking space is required for each dwelling unit, except that parking is waived for single-family houses and curb cuts are prohibited on zoning lots less than 40-feet wide. Front yard parking is prohibited.">
					                       R4B
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                         <a class="fancybox"  title="R5 districts allow a variety of housing types at higher density than permitted in R3-2 and R4 districts. The Floor Area Ratio (FAR) of 1.25 typically produces three-story attached houses and small apartment houses. With a height limit of 40 feet, R5 districts can provide a transitional between lower and higher density neighborhoods. 

The maximum street wall height of a new construction is 30 feet, with a 15-foot setback and a maximum building height of 40 feet. Front yards of all housing types must be 10 feet deep or, if deeper, a minimum of 18 feet to prevent cars parked on-site from protruding onto the sidewalk. 

Detached houses must have two side yards that total at least 13 feet with a minimum width of five feet for each one. Semi-detached buildings and the end buildings in a row of attached houses need one eight-foot-wide side yard. The maximum street wall length for a row of attached buildings on a single zoning lot is 185 feet. Off-street parking is required for 85% of the dwelling units.">
					                       R5
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        
                                                        <a class="fancybox"  title="On a block entirely within an R4 or R5 district (without a suffix), optional regulations may be used to develop infill housing in predominately built-up areas. Infill regulations may be used if at least 50% of the area of the block is occupied by zoning lots developed with buildings, and the lot does not exceed 1.5 acres. However, infill regulations may not be used to redevelop a lot occupied by a one- or two-family detached or semi-detached house unless the blockfront is predominantly developed with attached or multifamily housing. The criteria for using infill regulations can be found in the definition of predominately built-up areas in Section 12-10 of the Zoning Resolution.

On sites that qualify for infill regulations, the higher floor area ratios of 1.65 and more relaxed parking requirements permit developments with greater bulk and more dwelling units than are otherwise permitted in R5 districts. Infill regulations typically produce three-story buildings with three dwellings units and two parking spaces-one in a ground-floor garage and the other in the driveway. Infill regulations may also produce small apartment buildings. 

To ensure that infill housing generally conforms to existing neighborhood scale, height and setback regulations for R5 infill are the same as for R5B districts. Front yard must be at least 18 feet deep to prevent card parked in the front driveway from jutting onto the sidewalk. The maximum street wall length for a building on a single zoning lot is 185 feet. Off-street must be provided for at least two-thirds of the units.">
					                       R5 Infill
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R5A districts permit only one- and two-family detached residences with a maximum floor area ratio of 1.1. Similar to R4A districts, R5A districts are characterized by houses with two stories and an attic beneath a pitched roof, but the higher FAR and the higher perimeter wall permitted in R5A districts allow for somewhat larger buildings.

The perimeter wall of a house may rise to 25 feet in R5A districts (compared to 21 feet in R4A districts) before sloping or being set back to the maximum building height of 35 feet. The minimum lot width is 30 feet. The amount of required open space is governed by yard requirements which are the same as those in R4A districts: a front yard at least 10 feet deep and at least as deep as an adjacent front yard up to a depth of 20 feet; a 30-foot-deep rear yard; and two side yards that total at least 10 feet, each with a minimum width of two feet. One off-street parking space is required for each dwelling unit.">
					                       R5A
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="Although the R5B district also permits detached and semi-detached buildings, it is primarily a three-story row house district. The traditional characters of R5B districts is reflected in the district's height and setback, front yard and curb regulations.

The floor area ratio of 1.35 typically produces three-story row houses with a maximum street wall height of 30 feet, above which the building slopes or is set back to a maximum building height of 33 feet. As in R4B districts, the front yard must be at least five feet deep and it must be at least as deep as one adjacent front yard but no deeper than the other, to a maximum depth of 20 feet.

Attached row houses do not require side yards, but there must be at least eight feet between the end buildings in a row and buildings on adjacent zoning lots. Parking is waived for one- and two-family homes and curb cuts are prohibited on zoning lots less than 40 feet wide. Where parking is required, on-site spaces must be provided for two-thirds of the dwelling units.">
					                       R5B
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                         <a class="fancybox"  title="The character of R6 districts can range from row house neighborhoods to large-scale tower in the park developments. The standard bulk regulations, or Height Factor Regulations, for R6 districts encourage small apartment buildings on small zoning lots and, on larger lots, tall, narrow buildings that are set back from the street. As an alternative, developers may choose the optional Quality Housing program regulations to build lower, high lot coverage buildings that reflect the traditional neighborhood streetscape. 

Height Factor Regulations: Height factor buildings are often set back from the street and surrounded by open space and on-site parking. The floor area ratio in R6 districts ranges from 0.78 (for a single-story building) to 2.43 at a typical height of 13 stories; the open space ratio ranges from 27.5 to 37.5. A taller building can usually be obtained by providing more open space. In the diagram, for example, 81% of the zoning lot with the 13-story building is required to be open space (2.43 FAR x 33.5 OSR). Thus, the maximum floor area ratio is achievable only where the zoning lot is large enough to accommodate a practical building footprint as well as the required amount of open space. The building must be set within a sky exposure plane which, in R6 districts, begins at a height of 60 feet above the front lot line and then slopes inward over the zoning lot. Off-street parking is required for 70% of a building's dwelling units, or it can be waived if five or fewer spaces are required. 

Quality Housing Option: The optional Quality Housing regulations produce lower buildings with high lot coverage, which particularly on wide streets, typically allows for more apartments than might be achievable under height regulations. Outside the Manhattan Core, the R6 optional regulations for buildings on or within 100 feet of a wide street are the same as those in R6A districts. The FAR is 3.0 and the base height before setback is 40 to 60 feet with a maximum building height of 70 feet. On a narrow street (beyond 100 feet of a wide street), the maximum FAR is 2.2; the base height before setback is 30 to 45 feet with a maximum building height of 55 feet. Off-street parking, which is not permitted in front of a building, is required for 50% of the dwelling units, less than for height factor buildings. Parking is waived if five or fewer spaces are required.">
					                       R6
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The quality housing bulk regulations, which are mandatory in R6 districts, typically produce high lot-coverage six- or seven-story apartment buildings set on or near the street line and are designed to be compatible with existing buildings found in older neighborhoods. 

The floor area ratio in R6A districts is 3.0. Above a base height of 40 to 60 feet, the building must set back to a depth of 10 feet on a wide street and 15 feet on a narrow street before rising to a maximum height of 70 feet. To preserve the traditional streetscape, the street wall of a new building can be no closer to the street line than any building within 150 feet on the same block, up to a depth of 15 feet. The area between a buildings' street wall and the street line must be landscaped. Off-street parking, which is not allowed in front of a building, is required for 50% of a building's dwelling units, or waived if five or fewer spaces are required.">
					                       R6A
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R6B districts are often traditional row house districts, designed to preserve the scale and harmonious streetscape of the neighborhoods developed during the 19th century with four-story attached buildings. Many of these houses are set back from the street by stoops or small front yards. 

The floor area ratio is 2.0 and the mandatory Quality Housing regulations also accommodate apartment buildings at a similar four- to five-story scale. The base height of a new building before setback must be between 30 and 40 feet; the maximum building height is 50 feet. To maintain the traditional streetscape, curb cuts are prohibited on lots narrower than 40 feet and the front line wall of a new building, on any lot up to 50 feet wide, must be as deep as one adjacent front wall but no deeper than the other. Off-street parking is not allowed in front of a building and the area between the front wall and the street line must be landscaped. Parking is required for 50% of a building's dwelling units, or waived if five or fewer spaces are required.">
					                       R6B
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        <a class="fancybox"  title="R7 districts are medium-density apartment house districts. The height factor regulations for R7 districts encourage low apartment buildings on smaller zoning lots and, on larger lots, taller buildings with low lot coverage. As an alternative, developers may choose the optional Quality Housing regulations to build lower buildings with higher lot coverage. Regulations for residential development in R7-1 and R7-2 districts are essentially the same except that R7-2 districts have lower parking requirements. 

Height Factor Regulations: Height factor buildings are often set back from the street and surrounded by open space and on-site parking. The floor area ratio in R7 districts ranges from .87 to a high of 3.44; the open space ratio ranges from 15.5 to 25.5. As in other height factor districts, a taller building may be obtained by providing more open space. For example, 76% of the zoning lot with the 14-story building is required to be open space (3.44 FAR x 22.00 OSR). The maximum FAR is achievable only when the zoning lot is large enough to accommodate a practical building footprint as well as the required amount of open space. The building must be set within a sky exposure plane which, in R7 districts, begins at a height of 60 feet above the front lot line and then slopes inward over the zoning lot. 

In R7-1 districts, parking is required for 60% of the dwelling units, and can be waived if five or fewer spaces are required. In R7-2 districts, parking is required for 50% of the units, and waived is 15 or fewer spaces are required.	

Quality Housing Option: The optional quality housing regulations for R7 districts produce lower, high lot coverage buildings set on or neat the street line. With floor area ratios that are equal to or greater that can be achieved in height factor buildings, the optional Quality Housing regulations produce new buildings in keeping with the scale of many traditional neighborhoods. 

The R7 optional bulk regulations for buildings on wide streets outside the Manhattan Core are the same as those in R7A districts. The maximum FAR is 4.0 and the base height before setback is 40 to 65 feet with a maximum building height of 80 feet. The maximum FAR on buildings on narrow streets and within the Manhattan Core is 3.44 and the base height before setback is 40 to 60 feet with a maximum building height of 75 feet. Under the optional regulations, parking is required for 50% of the dwelling units in both R7-1 and R7-2 districts. Parking is waived in R7-1 districts if five or fewer spaces are required and in R7-2 districts if 15 or fewer spaces are required.">
					                       R7-1 & R7-2
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                         <a class="fancybox"  title="The Quality Housing bulk regulations, which are mandatory in R7A districts, typically produce high lot coverage, seven- and eight-story apartment buildings, blending with existing buildings in many established neighborhoods. 

The floor area ratio in R7A districts is 4.0. Above a base height of 40 to 65 feet, the building must set back to a depth of 10 feet on a wide street and 15 feet on a narrow street before rising to its maximum height of 80 feet. In order to preserve the traditional streetscape, the street wall of a new building can be no closer to the street line, up to a depth of 15 feet, than any building within 150 feet of the same block. The area between a building's street wall and the street line must be landscaped. Off-street parking is not allowed in front of a building. Parking is required for 50% of dwelling units and may be waived if 15 or fewer spaces are required.">
					                       R7A
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="In R7B districts, the mandatory Quality Housing regulations are similar to those of R6B districts but the higher floor area ratio and height limit generally produce six- to seven-story apartment buildings rather than the row houses typical of R6B districts. 

The FAR is 3.0; the base height of a new building before setback must be between 40 and 60 feet before rising to a maximum building height of 75 feet. To maintain the traditional streetscape, curb cuts are prohibited on lots narrower tan 40 feet and the front wall of a new building, on any lot up to 50 feet wide, must be as deep as one adjacent front wall, but no deeper than the other. On lots 50 feet wide or more, the front wall must be no closer to the street line than the front wall of an adjacent building. Front walls need not be set back beyond 15 feet. 

Off-street parking is not allowed in front of a building and the area between the front wall and the street line must be landscaped. Parking is required for 50% of dwelling units and is waived in five or fewer spaces are required.">
					                       R7B
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R7X districts are governed by Quality Housing regulations but the substantially higher floor area ratio and maximum building height produce taller, bulkier buildings than in R7A and R7B districts. The flexibility of the R7X regulations is exemplified by the nine- to 14-story apartment buildings in the R7X districts. 

The FAR is R7X districts 5.0. Above a base height of 60 to 85 feet, the building must set back to a depth of 10 feet on a wide street and 15 feet on a narrow street before rising to its maximum height of 125 feet. To maintain the traditional streetscape, the street wall of a new building can be no closer to the street line, up to a depth of 15 feet, than any building within 150 feet on the same block. Any area between a buildings street wall and the street line must be landscaped. 

Off-street parking is not allowed in front of a building. Parking is required for 50% of dwelling units and is waived if 15 or fewer spaces are required.">
					                       R7X
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="Apartment buildings in R8 districts can range from mid-rise, either- to ten-story buildings, to much taller, narrower buildings set back from the street on large zoning lots. New buildings in R8 districts may be developed under either height factor regulations or the optional Quality Housing regulations that reflect the traditional neighborhood streetscape. 

Height Factor Regulations: The floor area ratio for height factor development in R8 districts ranges from .94 to 6.02; the open space ratio ranges from 5.9 to 11.9. A taller building may be obtained by providing more open space. For a 17-story building, 64% of the zoning lot is required to be open space (6.02 FAR and 10.7 OSR). Thus, the maximum FAR is achievable only where the zoning lot is large enough to accommodate a practical building footprint as well as the required amount of open space. The building must be set within a sky exposure plane which, in R8 districts, begins at a height of 85 feet or nine stories, whichever is less, above the front lot line and then slopes inward over the zoning lot. 

Parking is required for only 40% of dwelling units since these districts are easily accessed by mass transit. It is waived if 15 or fewer spaces are required or if the zoning lot is 10,000 square feet or less. 

Quality Housing Option: The optional Quality Housing regulations in R8 districts produce lower, high lot coverage buildings set on or near the street line. With floor area ratios equal to or greater than can be achieved using R8 height factor regulations, the optional Quality Housing regulations produce new buildings in keeping with many of the city's established neighborhoods. 

The maximum FAR is 6.02, and the base height before setback is 60 to 80 feet with a maximum building height of 105 feet. On wide streets outside the Manhattan Core, the Far can rise to 7.2, and the base height before setback is 60 to 85 feet with a maximum building height of 120 feet. Parking requirements are the same as for height factor buildings: 40% of the dwelling units, or waived if 15 or fewer spaces or required or if the zoning lot is 10,000 square feet or less.">
					                       R8
				                        </a>
                                                        
                                                        
                                                        
                                                         &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The contextual Quality Housing Program regulations, which are mandatory in R8A districts typically result in high lot coverage 10- to 12-story apartment buildings, set on or near the street line. The district is mapped in areas characterized by buildings of that scale. 

The floor area ratio in R8A districts is 6.02. Above a base height of 60 to 85 feet, the building must be set back to a depth of 10 feet on a wide street and 15 feet on a narrow street before rising to its maximum height of 120 feet. On a wide street, the street wall must extend along the entire width of the zoning lot and at least 70% of the street wall must be within eight feet of the street line. 

Off-street parking is not allowed in front of a building. Parking is required for 40% of dwelling units, but is waived if 15 or fewer spaces are required or of the zoning lot is 10,000 square feet or less.">
					                       R8A
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R8B districts usually present the same unified blocks of brownstone row houses as R5B and R6B districts, but the higher floor area ratio of 4.0 creates a taller building. The mandatory Quality Housing regulations encourage new, six-story apartment buildings, with a one-story setback, to fit in with the rows of 19th century houses. 

The base height of a new building before a 10-foot setback is 55 to 60 feet. The maximum building height is 75 feet. Many buildings are set back from the street by stoops and shallow front yards. To maintain the traditional streetscape, curb cuts are prohibited on lots narrower than 40 feet and the front wall of a new building, on any lot up to 50 feet wide, must be as deep as one adjacent front wall but no deeper than the other. On lots with at least 50 feet of frontage, the front wall must be no closer to the street line than the front wall of an adjacent building. Front walls need not be set back beyond 15 feet. 

Off-street parking is not allowed in front of a building and any area between the front wall and the street line must be landscaped. Parking is required for 50% of dwelling units, and can be waived if 15 or fewer spaces are required.">
					                       R8B
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R8X districts are governed by Quality Housing Program regulations. The higher maximum building height permitted in R8X districts typically produces 14- to 16-story apartment buildings, taller than permitted in R8 districts. 

The floor area ratio in R8X districts is 6.02. Above a base height of 60 to 85 feet, the building must set back to a depth of 10 feet on a wide street and 15 feet on a narrow street before rising to its maximum height of 150 feet. As in R8A districts, the street wall on a wide street must extend along the entire width of the zoning lot and at least 70% of the street wall must be within eight feet of the street line. 

Off-street parking is not allowed in front of a building. Parking is required for 40% of dwelling units, and it can be waived if 15 or fewer spaces are required or the lot is 10,000 square feet or less.">
					                       R8X
				                        </a>
                                                        
                                                        
                                                        
                                                         &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="In R9 districts new buildings can be developed under height factor regulations or Quality Housing regulations, as in R6 through R8 districts. The optional Quality Housing regulations in R9 districts are exactly the same as the R9A regulations. Most R9 height factor buildings are developed pursuant to the tower rules, which are applicable only in the city's highest density areas, including R9 districts and commercial districts with an R9 residential district equivalent (C1-8, C2-7 and C6-3). 

R9 Height Factor/Tower Regulations: The floor area ratio for height factor/tower buildings in R9 districts ranges from 0.99 to 7.52 and the open space ratio from 1.0 to 9.0. As in other height factor districts, a taller building can usually be developed by providing more open space. Under the tower rules, however, buildings on both wide and narrow streets are permitted to penetrate the sky exposure plane. Buildings that front on a wide street must have a contextual street wall base of 60 to 85 feet with a tower above (tower-on-a-base). The height of the tower is controlled by a minimum lot coverage requirement and a rule that at least 55% of the floor area on the zoning lot is located below a height of 150 feet. For buildings with only narrow street frontage, a contextual base is not required and towers are permitted provided they are set back from the street line at least 15 feet. 

Parking is generally not required for any development in the Manhattan Core. Elsewhere, parking is required for 40% of dwelling units.">
					                       R9
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The mandatory Quality Housing regulations in R9A districts typically result in high lot coverage 14- to 15-story buildings set on or near the street line. Typical R9A buildings can be found in higher-density neighborhoods, which are often mapped as commercial districts, C1-8 or C2-7A, which have an R9A residential district equivalent. In these districts, apartments are usually above one or two floors of commercial use. 

The maximum floor area ratio in R9A districts is 7.52, the same as R9 districts. On wide streets, the base height is 60 to 102 feet with a maximum building height of 145 feet. On narrow streets, the base height is 60 to 95 feet with a maximum building height of 135 feet. The street wall of a new building on a wide street must extend along the entire width of the zoning lot and at least 70% of the street wall must be within eight feet of the street line. 

Off-street parking is generally not required for any development in the Manhattan Core (which is south of 110th street on the West Side and 96th street on the East Side). Elsewhere, parking is required for 40% of dwelling units.">
					                       R9A
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R9X districts (and C1-8X, C2-7X and C6-3X districts with an R9X residential district equivalent) are governed by Quality Housing regulations. With a floor area ratio and height limit substantially higher than other R9 districts, R9x regulations produce taller, bulkier 16- to 18- story apartment buildings. 

The FAR in R9X districts is 9.0. On a wide the street, the base height of a new building must be 105 to 120feet with a 10-foot setback before rising to a maximum height of 170 feet. On a wide street, the street wall must extend along the entire width of the zoning lot and at least 70% of the street wall must be within eight feet of the street line. On a narrow street, the base height must be 60 to 120 feet with a 15-footsetback before rising to a maximum height of 160 feet. 

Parking is not generally required for any development in the Manhattan Core. Elsewhere, parking is required for 40% of the dwelling units.">
					                       R9X
				                        </a>
                                                        
                                                        
                                                        
                                                         &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R10 districts permit the highest residential density in the city. This high density can also be achieved in commercial districts that permit an R10 residential district equivalent. 

Almost all districts that permit R10 density allow a residential FAR of 10.0 that can be increased to 12.0 pursuant to the Inclusionary Housing Program. In R10 and commercial districts within an R10 residential equivalent, height factor regulations do not apply. Developers of residential buildings may choose between Quality Housing regulations (the same as R10A regulations) or tower rules which permit a building to penetrate the sky exposure plane. Depending on the district and location, the tower may be required to have a contextual building base. 

R10 Tower-on-a-base: Tower regulations require a tower-on-a-base building form for most residential developments in R10 districts (and in C1-9 and C2-8 districts which permit residential use at R10 density above one or two floors of commercial use). In these districts, a residential building fronting on a wide street must have a contextual base between 60 and 85 feet high which extends continuously along the street line. The tower portion is permitted a lot coverage maximum of 40%. Its height is controlled by a lot coverage minimum of 30% and a rule that at least 55% of the floor area ratio on the zoning lot be located below a height of 150 feet. For buildings with only narrow frontage, no contextual base is required, and towers are permitted provided they are set back from the street line at least 15 feet. 

R10 Towers in Primarily Commercial Districts: In primarily commercial districts (C4-6, C4-7, C5 and C6-4 through C6-9) that permit residential development at R10 density, a tower is not required to have a contextual base. A tower footprint may cover no more than 40% of the area of the zoning lot, or up to 50% on lots smaller than 20,000 square feet. The tower must also be set back from the street line at least 10 feet on a wide street and 15 feet on a narrow street. In these districts, a floor area bonus can be achieved by providing a public plaza. 

R10 Parking: Parking is not generally required in the Manhattan Core or in Long Island City. Elsewhere, parking is required for 40% of the dwelling units.">
					                       R10
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The Quality Housing regulations that are mandatory in R10A districts typically produce large apartment buildings set on wide streets. Certain commercial districts also allow residential development at densities equivalent to R10A. 

Typical buildings are 22-story apartment buildings with high lot coverage and street walls set at the street line. Towers are not permitted in R10A districts. The floor area ratio is 10.0 which can be increased to 12.0 if lower income housing (Inclusionary Housing) is provided. The maximum base height before setback, which is 150 feet within 100 feet of a wide street and 125 feet of a narrow street, is designed to match the height of many older buildings. Above the base height, the required minimum setback is 10 feet from a wide street and 15 feet from a narrow street. The maximum height of a building is 210 feet within 100 feet of a wide street and 185 feet beyond 100 feet of a wide street. 

Parking is not generally required within the Manhattan Core. Elsewhere, it is required for 40% of the dwelling units.">
					                       R10A
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="R10X districts (and C6-4X districts which have an R10X residential district equivalent) permit a tower above a contextual base. The Quality Housing Program is mandatory. 

The floor area ratio of 10.0 may be increased to 12.0 if affordable housing is provided pursuant to the Inclusionary Housing Program, or if a publicly accessible plaza along a narrow street. Plazas are permitted only in buildings with a commercial community facility base. The building base must be between 60 and 85 feet high and extend along the entire frontage of a wide street. A tower is permitted above 85 feet provided it is set back at least 10 feet from a wide street and at least 15 feet from a narrow street. To prevent excessively tall and narrow towers, a tower must have a minimum lot coverage of 33%. No parking is required.">
					                       R10X
				                        </a>
                                                  
                                                 </div>
                                                         
                                                         
                                                        
                                                         
                                                         <a class="fancybox"  title="Commercial activities in the city are permitted in eight commercial districts based on their functional similarities and locational requirements. Small retail and service shops in C1 and C2 districts serve the immediate needs of surrounding residential communities. Larger stores with more goods and services are found in C4 districts, borough-wide regional retail centers like Main Street in Flushing and Fordham Road in the Bronx. C5 and C6 districts, central business districts that serve the city, the region and the nation, are mapped in Midtown, Lower Manhattan, Downtown Brooklyn and Long Island City. Three districts serve specific purposes: C3 for waterfront recreation, C7 for amusement parks and C8 for heavy repair shops and automotive uses.">
					                       Commercial Districts
				                        </a>
                                                        
                                                   <div class="well">
                                                        
                                                        
                                                        <a class="fancybox"  title="C1 & C2 (C1-1, C1-2, C1-3, C1-4, C1-5) & (C2-1, C2-2, C2-3, C2-4, C2-5) - C1-1 through C1-5 and C2-1 through C2-5 districts are mapped as commercial overlays within residence districts. They are mapped along streets that serve the mapbox retail needs of the surrounding residential neighborhood, and are found exclusively throughout the city's lower- and medium-density areas, and occasionally in higher-density areas. 

Typical retail uses include grocery stores, restaurants and beauty parlors, catering to the immediate neighborhood. C2 districts permit a slightly wider range of uses--such as funeral homes and repair services--than C1 districts. In mixed residential/commercial buildings, commercial uses are limited to one or two floors and must always be located below the residential use. 

When commercial overlays are mapped in R1 through R5 districts, the maximum commercial floor area ratio is 1.0; when mapped in R6 through R10 districts, the maximum commercial FAR is 2.0. Unless otherwise indicated, the depth of overlay districts ranges from 100 to 200 feet. 

Overlay districts are distinct from other commercial districts in that residential bulk is governed by the residence districts within which the overlay is mapped. All other commercial districts that permit residential use are assigned a specific residential district equivalent. However, when residences are constructed in any commercial district, certain regulations that apply in residence districts are waived, such as front and side yard requirements. 

Generally, the lower the numerical suffix, the more off-street parking is required. For example, in C1-1 districts, typically mapped in outlying areas of the city, a large food store would require one parking space for every 100 square feet of floor area, whereas no parking would be required in C1-5 districts, which are well served by mass transit. ">
					                       C1 & C2
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        <a class="fancybox"  title="C3 and C3A districts permit waterfront recreational activities, primarily boating and fishing, in area along the waterfront that are usually adjacent to residential districts. In addition to facilities for docking, renting, servicing and storing fishing and pleasure boats, permitted activities include aquatic sports equipment sales and rentals, bicycle shops, ice cream stores, and public and private beaches. C3 and C3A districts also permit residences and community facilities. 

The commercial floor area ratio permitted inC3 districts in 0.5. Commercial buildings may be no more than two stories or 30 feet high, whichever is less. Residential development in C3 districts is governed by R3-2 district regulations; in C3A districts, residential development is governed by R3A regulations which permit only detached residences. In a mixed building, commercial uses may occupy the ground floor only.

When commercial overlays are mapped in R1 through R5 districts, the maximum commercial floor area ratio is 1.0; when mapped in R6 through R10 districts, the maximum commercial FAR is 2.0. Unless otherwise indicated, the depth of overlay districts ranges from 100 to 200 feet. 

Parking requirements are high, but vary with the use.">
					                       C3
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        <a class="fancybox"  title="C4 districts are mapped in regional commercial centers that are located outside of the central business districts. In these areas, specialty and department stores, theaters and other commercial office uses serve a larger area and generate more traffic than neighborhood shopping areas. Use Groups 5, 6, 8, 9, 10 and 12, which include most retail establishments, are permitted in C4 districts. Uses that would interrupt the desired continuous retail frontage are not allowed. 

C4 districts with an A, D or X suffix are contextual districts in which the commercial and residential bulk and density regulations mat differ from corresponding non-contextual districts. Some districts have the same commercial and residential floor area ratios but may differ in parking requirements. Floor area may be increased for a plaza or Inclusionary housing in districts with an FAR of 10.0. 

C4-1districts are mapped in outlying areas that require large amounts of parking. C4-2 through C4-5 districts are mapped in more densely built areas. C4-6 and C4-7 districts are mapped in densely built areas in Manhattan.">
					                       C4
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                         <a class="fancybox"  title="C5 is a central commercial district intended for offices and high-end retail establishments that serve the entire metropolitan region and for streets where continuous retail frontage is desired. Famous shopping streets, such as Fifth Avenue, 34th to 59th Streets, and Madison Avenue from 57th to 87th are C5 districts. Luxury department stores, large office buildings, and mixed buildings with residential space above office or commercial floors, are typical C5 uses. Use Groups 5 (hotels), 6, 9 and 10 (retail shops and business services) and 11 (custom manufacturing) are permitted in C5 districts. Home maintenance services, auto rental establishments, illuminated signs and other uses not in character with the district are not permitted. 

The maximum commercial floor area ratio in C5 districts ranges from 4.0 to 15.0, and the maximum residential FAR is 10.0, exclusive of any applicable bonus. In the two contextual C5 districts (C5-1A and C5-2A) residential bulk and density are governed by R10A regulations. In non-contextual C5-2 through C5-5 districts, a building occupied by commercial, residential and/or community facility uses may be configured as a tower. A residential tower is also allowed in C5-1 districts. 

All commercial uses in C5 districts are exempt from parking requirements because public transportation is easily accessible.">
					                       C5
				                        </a>
                                                        
                                                        
                                                        &nbsp;&nbsp;
                                                        <a class="fancybox"  title="C6 districts permit a wide range of high-bulk commercial uses requiring a central location.C6-1 through C6-3 districts allow a commercial floor area ratio of 6.0 and are generally mapped outside of the central business cores. 

C6-4 through C6-9 districts, mapped mostly in major business districts permit a maximum FAR of 10.0 or 15.0, exclusive of an applicable bonus. In these districts, a tower occupied by commercial, residential and/or community facility uses may penetrate the sky exposure plane. 

C6 districts with a G or M suffix (C6-1G, C6-2G, C6-2M and C6-4M) have special regulations governing conversion of non-residential space to residential use. C6 districts are widely mapped within special districts. Some, such as C6-4.5, C6-5.5, C6-6.5 and C6-7T districts mapped only within the Special Midtown District, have unique floor area ratios and bonus rules. 

Because C6 districts are well served by mass transit, off-street parking is generally not required, except within the Special Hudson Yards District.">
					                       C6
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        <a class="fancybox"  title="C7 districts are specifically designated for large open amusement parks. In addition to the types of activities commonly found in amusement parks, like ferris wheel rides and games of chance (Use Group 15), C7 districts also permit boating facilities and other large open and enclosed entertainment facilities like skating rinks, sports stadiums and miniature golf courses (Use Groups 12-14). Residential and community facility uses are not permitted. 

The maximum floor area ratio is 2.0. Parking requirements are low, but vary with the specific use.">
					                       C7
				                        </a>
                                                        
                                                        &nbsp;&nbsp;
                                                        <a class="fancybox"  title="C8 districts, bridging commercial and manufacturing uses, provide for automotive and other heavy commercial services that often require large amounts of land. Typical uses are automobile showrooms and repair shops, warehouses, gas stations and car washes –although all commercial uses as well as certain community facilities are permitted in C8 districts. Housing is not permitted and performance standards are imposed for certain semi0industrial uses (Use Groups 11a and 16). 

C8 districts are mapped mainly along traffic arteries where concentrations of automotive uses have developed. The floor area ratio ranges from 1.0 in C8-1 districts to 5.0 in C8-4 districts. Off-street parking requirements vary with district and use. Automotive uses in C8-1 to C8-3 districts require substantial parking. C8-4 districts are usually exempt from parking requirements.">
					                       C8
				                        </a>
                                                        
                                                        
                                                        
                                                        
                                                   </div> 
                                                        
                                                       
                                                        
                                                        <a class="fancybox"  title="Today’s manufacturing uses and the zoning districts in which they are located encompass far more than factories engaged in the manufacture of goods. The range of industrial and manufacturing activities important to New York City’s economy is enormous—from catering suppliers, lighting fabricators, and warehouse and distribution centers to film production studios, ferry and ship terminals, and essential municipal facilities like sewage treatment plants, train yards and sanitation garages. In addition to these traditional and emerging industrial uses, manufacturing districts permit many commercial uses and, with limitations, some community facility uses.

Industrial uses are permitted in the three manu­facturing districts­—M1, M2 and M3—according to the characteristics of their operations. Each of the three districts incorporate differing performance standards that limit the amount and type of industrial nuisances permitted. Light manufacturing uses (Use Group 17) are permitted in all manufacturing districts. In general, the more potentially noxious uses (Use Group 18) are limited to M3 districts, but may also locate in M1 and M2 districts if they comply with the higher performance standards of those districts. All industrial uses must also comply with applicable city, state and federal environmental regulations.">
					                       Manufacturing Districts
				                        </a>
                                                        
                                                        <div class="well">
                                                        
                                                       
                                                        
                                                        <a class="fancybox"  title="The M1 district is often a buffer between M2 or M3 districts and adjacent residential or commercial districts. Light industries typically found in M1 areas include woodworking shops, auto storage and repair shops, and wholesale service and storage facilities. In theory, nearly all industrial uses can locate in M1 areas if they meet the more stringent M1 performance standards. Offices and most retail uses are also permitted. Certain community facilities, such as hospitals, are allowed in M1 districts only by special permit, but houses of worship are allowed as-of-right. 

In M1-5A and M1-5B districts mapped in SoHo/NoHo, artists may occupy joint living-work quarters as an industrial use in loft buildings. Other than M1 districts paired with residence districts in Special Mixed Use Districts M1-D, M1-5M and M1-6M districts are the only manufacturing districts in which residences are permitted. In M1-D districts, limited new residential uses with a maximum FAR of 1.65 are permitted only by City Planning Commission authorization. In M1-5M and M1-6, space in an industrial building may be converted to dwelling units, provided a specified amount of floor area is preserved for particular industrial and commercial uses. Conversion to dwellings is also allowed, with restrictions, in the Special Tribeca Mixed use District. 

Floor area ratios in M1 districts range from 1.0 to 10.0 and building height and setbacks are controlled by sky exposure planes which may be penetrated by towers in certain districts. Although new industrial buildings are usually low-rise structures that fir within sky exposure planes, commercial and community facility buildings can be constructed as towers in M1-3 through M1-6 districts. In the highest density manufacturing district, M1-6, an FAR of 12 can be achieved with a bonus for a public plaza. Except along district boundaries, no side yards are required. Rear yards at least 20 feet deep are usually required, except within 100 feet of a corner. 

Parking and loading requirements vary with district and use. M1-1, M1-2, and M1-3 districts are subject to parking requirements based on the type of use and size of an establishment (Section 44-21 of the Zoning Resolution). For example, a warehouse in the M1-1 district requires one off-street parking space per 2,000 square feet of floor area or per three employees, whichever would be less. Parking is not requires in M1-4, M1-5 and M1-6 districts. Requirements for loading berths of specified dimensions differ according to district, size and type of use.">
					                       M1
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                         <a class="fancybox"  title="M2 districts occupy the middle ground between light and heavy industrial areas. The four M-2 districts, with different floor area ratios and parking requirements, are mapped mainly in the city's older industrial areas along the waterfront. 

Required performance standards in all M2 districts are lower than in M1 districts. Except when M2 uses border on a residential district, more noise and vibration are allowed, smoke is permitted and industrial activities need not be entirely enclosed. 

M2-1 and M2-2 districts, with FARs of 2.0 and 5.0, and maximum base heights before setback and 60 to 85 feet respectively, are subject to the parking requirements of section 44-21 of the Zoning Resolution. The requirements vary according to use and are the same as those for M1 districts where parking is required. M2-3 and M2-4 districts, mapped only in Manhattan, are exempt from parking requirements. Loading berth requirements differ according to district, type of use and size of establishment.">
					                       M2
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        
                                                        <a class="fancybox"  title="M3 districts are for heavy industries that generate noise, traffic, or pollutants. Typical uses include power plants, solid waste transfer facilities and recycling plants, and fuel supply depots. Even in M3 districts, uses with potential nuisance effects are required to conform to minimum performance standards. Like M2 districts, M3 districts are usually located near the waterfront and buffered from residential areas. 

The two M3 districts (M3-1 and M3-2), both with a maximum floor area ratio of 2.0 and a maximum base height before setback of 60 feet, differ only in parking requirements. M3-1 districts are subject to the parking requirements of Section 44-21 of the Zoning Resolution and M3-1 districts, found only in Manhattan, are exempt.">
					                       M3
				                        </a>
                                                        
                                                   </div>
                                                        
                                                         
                                                        <a class="fancybox"  title="The City Planning Commission has been designating special zoning districts since 1969 to achieve specific planning and urban design objectives in defined areas with unique characteristics. Special districts respond to specific conditions; each special district designated by the Commission stipulates zoning requirements and/or zoning incentives tailored to distinctive qualities that may not lend themselves to generalized zoning and standard development.">
					                       Special Purpose Districts
				                        </a>
                                                       <div class="well">
                                                        
                                                        
                                                        
                                                        <a class="fancybox"  title="The purpose of the Special Enhanced Commercial District (EC) is to promote and maintain a lively and engaging pedestrian experience along commercial avenues.">
					                       EC
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The Special Limited Commercial District (LC) attempts to preserve the character of commercial areas within historic districts by permitting only those commercial uses compatible with the historic district, and by mandating that all commercial uses be in completely enclosed buildings. In addition, limitations are placed on the size and illumination of signs. There is one such special district mapped in Greenwich Village.">
					                       LC
				                        </a>
                                                        
                                                        
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The Special Mixed Use District (MX) was established in 1997 to encourage investment in, and enhance the vitality of, existing neighborhoods with mixed residential and industrial uses in close proximity and create expanded opportunities for new mixed use communities. New residential and non-residential uses (commercial, community facility and light industrial) can be developed as-of-right and be located side-by-side or within the same building. Pairing an M1 district with an R3 through R10 district (e.g. M1-2/R6) ensures a balanced variety of uses. 

Residential uses are generally subject to the bulk controls of the governing residence district; commercial, industrial and community facility uses are subject to the M1 district bulk controls, except that community facilities are subject to residential FAR limits. Most light industrial uses are permitted in each MX district as-of-right, others are subject to restrictions and Use Group 18 uses are excluded altogether, except for small breweries. 
">
					                       MX
				                        </a>
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The purpose of the Special Natural Area District (NA) is to guide new development and site alterations in areas endowed with unique natural characteristics, including forests, rock outcrops, steep slopes, creeks and a variety of botanic and aquatic environments. In the four Special Natural Areas, the City Planning Commission reviews proposals for new development, enlargements and site alterations to maximize protection of natural features. Natural features are protected by limiting modifications in topography, by preserving tree, plant and marine life, and natural water courses, and by encouraging clustered development.">
					                       NA
				                        </a>
                                                        
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        
                                                         <a class="fancybox"  title="The Special Planned Community Preservation District (PC) designation protects the unique character of communities that have been planned and developed as a unit. Those communities characteristically have large landscaped open spaces and a superior relationship of buildings, open spaces, commercial uses, and pedestrian and vehicular circulation. No demolition, new development, enlargement or alteration of landscaping or topography is permitted within the district except by special permit of the City Planning Commission. Preservation districts have been mapped in Sunnyside Gardens and Fresh Meadows in Queens, Parkchester in the Bronx and Harlem River Houses in Manhattan.">
					                       PC
				                        </a>
                                                        
                                                        
                                                        &nbsp;&nbsp;
                                                        
                                                        <a class="fancybox"  title="The Special Scenic View District (SV) is intended to prevent obstruction of outstanding scenic views as seen from a public park, esplanade or mapped public place. No buildings or structures are allowed to penetrate a scenic view plane except by special permit of the City Planning Commission. The Brooklyn Heights Scenic View District (SV-1) extends over an area west of the Brooklyn Heights Promenade to protect the views of the Lower Manhattan skyline, Governors Island, the Statue of Liberty and the Brooklyn Bridge.">
					                       SV
				                        </a>
                                                        
                                                   
                                                         
                                                       </div>
                                                        
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Parcels - Owner Name Address Zone</span>
                                                            </div>
                                                        
                                                       
                                                    </div>
                                                    <div class="box-content">
                                                              
                                                        
                                                         
                                                            <button type="button" class="btn btn-warning" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York_Manhattan/Zoning'">Parcels - Manhattan </button>
                                                             &nbsp;&nbsp;
                                                             
                                                           <button disabled="disabled" type="button" class="btn btn-default"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/pagedfulltablemap/New_York_Bronx/Zoning'">Parcels - Bronx </button>
                                                            
                                                           
                                                            &nbsp;&nbsp;
                                                            <button disabled="disabled" type="button" class="btn btn-default"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York_Brooklyn/Zoning'">Parcels - Brooklyn </button>
                                                        
                                                            
                                                        
                                                            &nbsp;&nbsp;
                                                            <button disabled="disabled" type="button" class="btn btn-default" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York_Queens/Zoning'">Parcels - Queens  </button>
                                                       
                                                            &nbsp;&nbsp;
                                                            <button disabled="disabled" type="button" class="btn btn-default" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York_Staten_Island/Zoning'">Parcels - Staten Island  </button>
                                                        
                                                        
                                                      
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                    
                     <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Special Zones</span>
                                                            </div>
                                                        
                                                       
                                                    </div>
                                                    <div class="box-content">
                                                              
                                                        <button  type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Project_Zone'">New York Project Zone </button>
                                                            
                                                           
                                                            &nbsp;&nbsp;
                                                         
                                                            <button type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Limited_Height_District'">New York Limited Height District </button>
                                                             &nbsp;&nbsp;
                                                             
                                                           
                                                            <button  type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Special_Districts'">New York Special Districts </button>
                                                        
                                                            
                                                        
                                                            &nbsp;&nbsp;
                                                            <button  type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Special_Subdistricts'">New York Special Subdistricts  </button>
                                                       
                                                            
                                                        
                                                      
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                    <div class="box-header">
                                                            <div class="box-name">
                                                                    
                                                                    <span>Administration</span>
                                                            </div>
                                                        
                                                       
                                                    </div>
                                                    <div class="box-content">
                                                              
                                                        <button  type="button" class="btn btn-primary"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/simplemap/New_York/Boroughs'">New York Boroughs </button>
                                                            
                                                           
                                                            &nbsp;&nbsp;
                                                         
                                                            <button type="button" class="btn btn-primary" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerclienttablemap/New_York/Neighborhoods'">New York Neighborhoods</button>
                                                             &nbsp;&nbsp;
                                                             
                                                           
                                                            <button  type="button" class="btn btn-primary"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerclienttablemap/New_York/Community_Districts'">New York Community Districts </button>
                                                        &nbsp;&nbsp;
                                                        
                                                        
                                                        <br>
                                                        
                                                        <button  type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/simplemap/New_York/Building_Demolition'">New York Building Demolition </button>
                                                            
                                                           
                                                            &nbsp;&nbsp;
                                                        
                                                            
                                                            <button  type="button" class="btn btn-info"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/justtiles/New_York/Building'">New York Building </button>
                                                            
                                                           
                                                            &nbsp;&nbsp;
                                                        
                                                            
                                                            
                                                        
                                                        
                                                            
                                                            <button  type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Parks'">New York Parks  </button>
                                                        &nbsp;&nbsp;
                                                        
                                                        <button  type="button" class="btn btn-info" onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/simplemap/New_York/Parking_Lots'">New York Parking Lots  </button>
                                                        &nbsp;&nbsp;
                                                            
                                                        
                                                        
                                                         <button disabled="disabled" type="button" class="btn btn-default"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Address'"> New York Address</button>
                                                        
                                                            &nbsp;&nbsp;
                                                        
                                                        <button disabled="disabled" type="button" class="btn btn-default"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Streets'"> New York Streets</button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                            
                                                             <button disabled="disabled" type="button" class="btn btn-default"    onclick="location.href = '<?php echo Config::get('URL'); ?>mapboxgl/scrollerfulltablemap/New_York/Sidewalk'"> New York Sidewalk</button>
                                                        
                                                            &nbsp;&nbsp;
                                                            
                                                      
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                    
                    
                    
                    
                    
                    
                     <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                            <div class="box">
                                                
                                                    
                                                
                                                    <div class="box-content">
                                                            
                                                        
                                                       Permission for use of these proprietary data is granted by the City of New York Department of City Planning. &nbsp; &nbsp;  Copyright &copy; <?php echo date("Y"); ?> City of New York. All Rights Reserved
                                                    </div>
                                            </div>
                                    </div>
                        
                        
                        </div>
                    
                    
                       
                    
                    
                       
                   
                    
                    
                    
                    
                        
                    
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->



</body>
</html>